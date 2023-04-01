<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{
    
    public function handleChat(Request $request)
    {

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $request->input('message'),
            "max_tokens" => 1000,
            "temperature" => 0.5,
        ]);

        $question = $request->input('message');

        $output= $result['choices'][0]['text'];

        return view('welcome', ['output' => $output, 'question' => $question]);


    }

}
