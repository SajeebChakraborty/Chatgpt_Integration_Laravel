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
        ]);

        $output= $result['choices'][0]['text'];

        return view('welcome', ['output' => $output]);


    }

}
