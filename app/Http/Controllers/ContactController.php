<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('h.htataung@icloud.com')->subject($data['subject']);
        });
    }
}
