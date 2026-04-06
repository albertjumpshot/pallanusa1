<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // In production, save to database or send email
        // Mail::send('emails.contact-inquiry', $validated, function($mail) { ... });

        return back()->with('success', 'Terima kasih atas pesan Anda. Kami akan menghubungi Anda segera.');
    }
}