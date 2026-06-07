<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuickbooksCallbackRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CallbackController extends Controller
{
    /**
     * Arrange a QuickBooks Callback
     * 
     * @param QuickBooksCallbackRequest array
     * @return RedirectResponse
     */
    public function quickbooks(QuickbooksCallbackRequest $request): RedirectResponse
    {
        $name = $request->input("name");
        $email = $request->post("email");
        $phone = $request->post("phone");
        $issue = $request->post("issue");
        $ip = $request->ip();

        $blockedWords = [
            "seo",
            "digital marketing"
        ];

        foreach ($blockedWords as $word) {
            if (str_contains(strtolower($issue), $word)) {
                    return back()->withErrors([
                        "message" => "We don't need your service. This message will not reach us."
                    ]);
            }
        }

        $text =
        "<b>QuickBooks Callback Request</b>\n\n" .
        "<b>Name:</b> {$name}\n".
        "<b>Email:</b> {$email}\n".
        "<b>Phone:</b> {$phone}\n".
        "<b>Issue:</b> {$issue}\n\n".
        "<b>IP Address:</b> {$ip}";

        $this->sendTelegram($text);

        return back()->with([
            "success" => "Callback request submitted! A support representative will call you now.",
            "form_submitted" => true
        ]);
    }

    /**
     * Send the telegram message
     * 
     * @param string string
     * @return void
     */
    protected function sendTelegram(string $message): void
    {
        $token = config("services.telegram.bot_token");
        $chatId = config("services.telegram.chat_id");

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        try {
            Http::post($url, [
                "chat_id" => $chatId,
                "text" => $message,
                "parse_mode" => "HTML"
            ]);
        } catch (\Exception $e) {
            Log::error('Telegram notification failed: ' . $e->getMessage());
        }
    }
}
