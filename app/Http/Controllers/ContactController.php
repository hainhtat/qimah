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
        $data['message'] = strip_tags($data['message']);

        Mail::raw($data['message'], function($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('h.htataung@icloud.com')->subject($data['subject']);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
