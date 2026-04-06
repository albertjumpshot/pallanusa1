<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Store a chat message and prepare for AI integration
     * 
     * This is a placeholder for future AI chatbot integration
     * using OpenAI API
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Integrate with OpenAI API here
        // For now, return a placeholder response
        
        return response()->json([
            'status' => 'success',
            'message' => 'AI Chatbot akan segera tersedia. Silakan hubungi kami melalui formulir kontak.',
            'type' => 'placeholder'
        ]);
    }
}