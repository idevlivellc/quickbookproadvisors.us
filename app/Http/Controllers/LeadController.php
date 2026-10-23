<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadCallNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Str;
use Throwable;

class LeadController extends Controller
{
    public function getCustomerDetails(Request $request)
    {
        // Check the shared bearer token configured for the ElevenLabs webhook.
        $expectedToken = config('services.elevenlabs.agent_token');
        $providedToken = $request->bearerToken();

        if (
            ! is_string($expectedToken) ||
            $expectedToken === '' ||
            ! is_string($providedToken) ||
            ! hash_equals($expectedToken, $providedToken)
        ) {
            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        $now = now();

        try {
            $result = DB::transaction(function () use ($now) {
                $lead = Lead::query()
                    ->where('ai_call_eligible', true)
                    ->whereNull('do_not_call_at')
                    ->where(function ($query) use ($now) {
                        // First-time calls: only select leads that have no call history.
                        $query->where(function ($pending) use ($now) {
                            $pending->where(
                                'call_status',
                                Lead::STATUS_PENDING
                            )
                            ->whereDoesntHave('callNotes')
                            ->where(function ($due) use ($now) {
                                $due->whereNull('next_call_at')
                                    ->orWhere('next_call_at', '<=', $now);
                            });
                        })

                        // Scheduled callbacks can be selected again once they are due.
                        ->orWhere(function ($callback) use ($now) {
                            $callback->where(
                                'call_status',
                                Lead::STATUS_CALLBACK_SCHEDULED
                            )
                            ->whereNotNull('next_call_at')
                            ->where('next_call_at', '<=', $now);
                        });
                    })
                    ->orderBy('id')
                    ->lockForUpdate()
                    ->first();

                if (! $lead) {
                    return null;
                }

                $callId = (string) Str::uuid();

                // Mark the lead as in progress before returning it, preventing another
                // request from claiming it at the same time.
                $lead->call_status = Lead::STATUS_IN_PROGRESS;
                $lead->call_attempts = (int) $lead->call_attempts + 1;
                $lead->call_claimed_at = $now;
                $lead->save();

                $lead->callNotes()->create([
                    'call_id' => $callId,
                    'status' => 'in_progress',
                    'started_at' => $now,
                ]);

                return [
                    'call_id' => $callId,
                    'lead' => [
                        'id' => $lead->id,
                        'name' => $lead->name,
                        'email' => $lead->email,
                        'phone' => $lead->phone,
                    ],
                ];
            }, 3);

            if ($result === null) {
                return response()->json([
                    'available' => false,
                    'message' => 'No eligible leads are currently available.',
                ], 200);
            }

            return response()->json([
                'available' => true,
                'call_id' => $result['call_id'],
                'customer' => $result['lead'],
            ], 200);
        } catch (Throwable $exception) {
            Log::error(
                'Unable to claim the next lead for an AI call.',
                ['exception' => $exception]
            );

            return response()->json([
                'message' => 'Unable to retrieve a lead right now.',
            ], 500);
        }
    }

    public function updateCustomerCallResult(Request $request)
    {
        $expectedToken = config('services.elevenlabs.agent_token');
        $providedToken = $request->bearerToken();

        if (
            ! is_string($expectedToken) ||
            $expectedToken === '' ||
            ! is_string($providedToken) ||
            ! hash_equals($expectedToken, $providedToken)
        ) {
            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        $validated = $request->validate([
            'call_id' => ['required', 'uuid'],

            'outcome' => [
                'required',
                'string',
                \Illuminate\Validation\Rule::in([
                    'interested',
                    'not_interested',
                    'no_answer',
                    'callback_later',
                    'do_not_call',
                    'wrong_number',
                ]),
            ],

            'notes' => ['nullable', 'string', 'max:10000'],

            'callback_at' => [
                'nullable',
                'required_if:outcome,callback_later',
                'date',
                'after:now',
            ],

            'elevenlabs_conversation_id' => [
                'nullable',
                'string',
                'max:255',
            ],

            'duration_seconds' => [
                'nullable',
                'integer',
                'min:0',
                'max:86400',
            ],
        ]);

        try {
            $result = DB::transaction(function () use ($validated) {
                $callNote = LeadCallNote::query()
                    ->where('call_id', $validated['call_id'])
                    ->lockForUpdate()
                    ->first();

                if (! $callNote) {
                    return ['error' => 'not_found'];
                }

                // A call result can only be submitted once.
                if ($callNote->status !== 'in_progress') {
                    return ['error' => 'already_updated'];
                }

                $lead = Lead::query()
                    ->whereKey($callNote->lead_id)
                    ->lockForUpdate()
                    ->first();

                if (! $lead) {
                    return ['error' => 'lead_not_found'];
                }

                $now = now();
                $outcome = $validated['outcome'];

                $callNote->outcome = $outcome;
                $callNote->notes = $validated['notes'] ?? null;
                $callNote->ended_at = $now;

                if (isset($validated['elevenlabs_conversation_id'])) {
                    $callNote->elevenlabs_conversation_id =
                        $validated['elevenlabs_conversation_id'];
                }

                if (isset($validated['duration_seconds'])) {
                    $callNote->duration_seconds = $validated['duration_seconds'];
                }

                if ($outcome === 'callback_later') {
                    $callNote->callback_at = $validated['callback_at'];
                }

                $callNote->status = 'completed';
                $callNote->save();

                // Clear the claim because this call attempt has finished.
                $lead->call_claimed_at = null;

                switch ($outcome) {
                    case 'callback_later':
                        $lead->call_status = Lead::STATUS_CALLBACK_SCHEDULED;
                        $lead->next_call_at = $validated['callback_at'];
                        $lead->ai_call_eligible = true;
                        break;

                    case 'do_not_call':
                        $lead->call_status = Lead::STATUS_DO_NOT_CALL;
                        $lead->next_call_at = null;
                        $lead->ai_call_eligible = false;
                        $lead->do_not_call_at = $now;
                        break;

                    case 'no_answer':
                    case 'interested':
                    case 'not_interested':
                    case 'wrong_number':
                        // These outcomes finish the lead's call flow. A no-answer
                        // result is not automatically retried.
                        $lead->call_status = Lead::STATUS_COMPLETED;
                        $lead->next_call_at = null;
                        $lead->ai_call_eligible = false;
                        break;
                }

                $lead->save();

                return [
                    'call_id' => $callNote->call_id,
                    'lead_id' => $lead->id,
                    'outcome' => $outcome,
                    'call_status' => $lead->call_status,
                ];
            }, 3);

            if (($result['error'] ?? null) === 'not_found') {
                return response()->json([
                    'message' => 'Call record not found.',
                ], 404);
            }

            if (($result['error'] ?? null) === 'lead_not_found') {
                return response()->json([
                    'message' => 'Lead for this call record was not found.',
                ], 404);
            }

            if (($result['error'] ?? null) === 'already_updated') {
                return response()->json([
                    'message' => 'A result has already been recorded for this call.',
                ], 409);
            }

            return response()->json([
                'message' => 'Call result updated successfully.',
                'call' => $result,
            ], 200);
        } catch (Throwable $exception) {
            Log::error(
                'Unable to update the AI call result.',
                ['exception' => $exception]
            );

            return response()->json([
                'message' => 'Unable to update the call result right now.',
            ], 500);
        }
    }
}
