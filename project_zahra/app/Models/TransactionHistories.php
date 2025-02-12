<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionHistories extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaction_histories';

    protected $fillable = [
        'transaction_histories_id',
        'transaction_id',
        'business_id',
        'reference_internal_id',
        'reference_id',
        'history_action',
        'history_status',
        'is_live',
        'amount',
    ];

    protected $casts = [
        'is_live' => 'boolean',
    ];
}