<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {}
    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        return ['status' => 'Message Sent!'];
    }

}
