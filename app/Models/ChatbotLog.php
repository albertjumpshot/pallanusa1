<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotLog extends Model
{
    protected $fillable = [
        'query',
        'response',
        'result_count',
        'top_result'
    ];

    protected $casts = [
        'response' => 'array',
        'result_count' => 'integer',
    ];
}
