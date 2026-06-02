<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChatbotLog;

class AdminChatbotLogController extends Controller
{
    public function index()
    {
        $logs = ChatbotLog::orderByDesc('created_at')->paginate(15);
        return view('admin.chatbot_logs.index', compact('logs'));
    }

    public function show($id)
    {
        $log = ChatbotLog::findOrFail($id);
        return view('admin.chatbot_logs.show', compact('log'));
    }

    public function destroy($id)
    {
        $log = ChatbotLog::findOrFail($id);
        $log->delete();

        return redirect()->route('admin.chatbot_logs.index')->with('success', 'Riwayat chatbot berhasil dihapus.');
    }
}
