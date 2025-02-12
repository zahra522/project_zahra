<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionBalanceHistory extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel yang sesuai
    protected $table = 'transaction_balance_histories';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'id',
        'transaction_balance_id',
        'transaction_id',
        'business_id',
        'reference_internal_id',
        'reference_id',
        'type',
        'sub_type',
        'payment_channel',
        'payment_date',
        'channel_code',
        'is_live',
        'amount',
        'balance',
    ];

    // Kolom yang harus di-cast ke tipe data tertentu
    protected $casts = [
        'is_live' => 'boolean', // Cast kolom "is_live" ke tipe boolean
        'payment_date' => 'datetime', // Cast kolom "payment_date" ke tipe datetime
    ];

    // Kolom tanggal (timestamps)
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}