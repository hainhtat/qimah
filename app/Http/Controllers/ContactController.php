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

        if (Mail::raw($data['message'], function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('h.htataung@icloud.com')->subject($data['subject']);
        })) {
            return response()->json(['status' => 200, 'message' => 'Your message has been sent!']);
        } else {
            return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
        }
    }
}
