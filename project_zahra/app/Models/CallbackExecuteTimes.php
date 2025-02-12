<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallbackExecuteTimes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'callback_execute_times'; // Nama tabel yang sesuai

    protected $fillable = [
        'callback_id',
        'transaction_id',
        'execute_time',
        'status',
        'payload_response',
        'sender',
    ];

    protected $casts = [
        'execute_time' => 'datetime', // Cast kolom 'execute_time' ke tipe datetime
    ];
}