<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeadCallNote extends Model
{
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';

    public const OUTCOME_INTERESTED = 'interested';
    public const OUTCOME_NOT_INTERESTED = 'not_interested';
    public const OUTCOME_NO_ANSWER = 'no_answer';
    public const OUTCOME_CALLBACK_LATER = 'callback_later';
    public const OUTCOME_WRONG_NUMBER = 'wrong_number';
    public const OUTCOME_DO_NOT_CALL = 'do_not_call';
    
    protected $fillable = [
        'lead_id',
        'call_id',
        'elevenlabs_conversation_id',
        'status',
        'outcome',
        'notes',
        'started_at',
        'ended_at',
        'callback_at',
        'duration_seconds',
    ];

    protected function casts(): array
    {
        return [
            'started_at' => 'datetime',
            'ended_at' => 'datetime',
            'callback_at' => 'datetime',
            'duration_seconds' => 'integer',
        ];
    }

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }
}
