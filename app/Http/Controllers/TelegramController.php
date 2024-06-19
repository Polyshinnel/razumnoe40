<?php

namespace App\Http\Controllers;

use App\Components\TelegramClient;
use App\Http\Requests\TelegramRequest;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function __invoke(TelegramRequest $request) {
        $data = $request->validated();
        $telegramApi = config('telegramConfig.telegram_api_key');
        $chatId = config('telegramConfig.telegram_chat_id');
        $telegramClient = new TelegramClient();
        $baseUrl = 'https://api.telegram.org/bot'.$telegramApi.'/sendMessage';

        $telegramRequest = [
            'chat_id' => $chatId,
            'text' => '',
            'parse_mode' => 'html'
        ];

        $responseMessage = [
            'message' => 'ok',
            'err' => 'none'
        ];

        $telegramMessage = "<b>Получено новое сообщение</b>\r\n";
        $telegramMessage .= "<b>Имя:</b> ".$data['name']."\r\n";
        $telegramMessage .= "<b>Телефон:</b> ".$data['phone']."\r\n";
        if(isset($data['message'])) {
            $telegramMessage .= "<b>Сообщение:</b> ".$data['message']."\r\n";
        }

        $telegramRequest['text'] = $telegramMessage;

        try {
            $response = $telegramClient->client->request('POST', $baseUrl, [
                'query' => $telegramRequest
            ]);
        }
        catch (GuzzleException $e) {
            $responseMessage = [
                'message' => 'somthing went wrong',
                'err' => $e->getMessage()
            ];
        }

        if($responseMessage['err'] !== 'none') {
            return response()->json($responseMessage, 500);
        }

        return response()->json($responseMessage, 200);
    }
}
