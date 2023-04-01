<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    
    public function handleChat(Request $request)
    {
        $client = new Client([
            'base_uri' => 'https://api.openai.com',
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY')
            ]
        ]);

        $response = $client->request('POST', '/v1/engines/davinci-codex/completions', [
            'json' => [
                'prompt' => $request->input('message'),
                'max_tokens' => 100,
                'temperature' => 0.5,
                'n' => 1,
                'stop' => ['\n']
            ]
        ]);

        $responseData = json_decode($response->getBody(), true);

        return response()->json(['message' => $responseData['choices'][0]['text']]);
    }

}
