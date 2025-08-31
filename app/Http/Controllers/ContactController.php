<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Debug logging
        \Log::info('Contact form submitted', $request->all());
        
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            \Log::info('Attempting to send email', $data);
            
            $emailBody = "New Contact Form Message\n\n" .
                        "Name: " . $data['name'] . "\n" .
                        "Email: " . $data['email'] . "\n" .
                        "Subject: " . $data['subject'] . "\n\n" .
                        "Message:\n" . $data['message'];
            
            Mail::raw($emailBody, function ($mail) use ($data) {
                $mail->to('mo7ammaddev@gmail.com')
                     ->subject($data['subject'] . ' - Portfolio Contact')
                     ->replyTo($data['email'], $data['name']);
            });

            \Log::info('Email sent successfully');
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return back()->with('error', 'Sorry, there was an error sending your message: ' . $e->getMessage());
        }
    }
}

