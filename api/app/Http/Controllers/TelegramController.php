<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
// use Monolog\Handler\TelegramBotHandler;

class TelegramController extends Controller
{
    private const BOT_API = 'https://api.telegram.org/bot';

    public function handleWebhook(Request $request): void
    {
        $data = $request->all();

        if (isset($data['message']['text']) && $data['message']['text'] === '/start') {
            $chatId = $data['message']['chat']['id'];
            $userName = $data['message']['from']['first_name'] ?? 'User';

            User::updateOrCreate(
                ['chat_id' => $chatId],
                ['name' => $userName]
            );

            $this->sendMessage($chatId, "Привіт, $userName! Вітаємо у нашому боті.");
        }
    }

    private function sendMessage($chatId, $text): void
    {
        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $url = self::BOT_API . $this->$telegramToken . '/SendMessage';
        Http::post($url, [
            'chat_id' => $chatId,
            'text' => $text,
        ]);
    }
}
