<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settlement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'settlements';

    protected $fillable = [
        'settlement_id',
        'business_id',
        'transaction_id',
        'reference_internal_id',
        'reference_id',
        'receipt_number',
        'status',
        'settlement_date',
        'approved_by',
        'remark',
        'payment_channel',
        'channel_code',
        'payment_identifier',
        'payment_date',
        'account_number',
        'amount',
        'partner_code',
        'meta_data',
        'is_live',
    ];

    protected $casts = [
        'settlement_date' => 'datetime',
        'payment_date' => 'datetime',
        'is_live' => 'boolean',
    ];
}