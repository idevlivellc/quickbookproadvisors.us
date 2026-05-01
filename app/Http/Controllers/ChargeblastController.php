<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChargeblastController extends Controller
{
    public function disputeAlert(Request $request)
    {
        # 1. Verify the webhook secret
        $secret = $request->header("X-Chargeblast-Secret") ?? $request->query("secret");

        if ($secret !== config("services.chargeblast.webhook_secret")) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        # 2. Parse the payload
        $payload = $request->all();
        $alertType = $payload["type"] ?? "Unknown Alert";
        $details   = $payload["data"] ?? [];

        $amount  = isset($data["amount"])
                ? "$" . number_format($data["amount"] / 100, 2)  // ChargeBlast sends amount in cents
                : "N/A";

        $date = isset($data["transaction_date"])
                    ? Carbon::parse($data['transaction_date'])->format("d M Y")
                    : (isset($data['created_at'])
                        ? Carbon::parse($data["created_at"])->format("d M Y")
                        : "N/A");

        # 3. Build a readable Telegram message
        $message =  "*Dispute Alert*";
        $message .= "*Type:* {$alertType}\n";
        $message .= "*Amount:* {$amount}\n";
        $message .= "*Date:* {$date}";

        #  5. Send to Telegram
        $this->sendTelegram($message);

        return response()->json(["status" => "ok"]);
    }

    protected function sendTelegram(string $message): void
    {
        $token = config("services.telegram.bot_token");
        $chatId = config("services.telegram.chat_id");

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        try {
            Http::post($url, [
                "chat_id" => $chatId,
                "text" => $message,
                "parse_mode" => "Markdown"
            ]);
        } catch (\Exception $e) {
            Log::error('Telegram notification failed: ' . $e->getMessage());
        }
    }
}
