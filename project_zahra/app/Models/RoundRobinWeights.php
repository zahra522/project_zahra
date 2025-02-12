<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoundRobinWeights extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'round_robin_weights';

    protected $fillable = [
        'payment_method_id',
        'total_row',
        'gcd',
        'total_request_number',
        'current_weight',
        'max_weight',
    ];

    protected $casts = [
        'payment_method_id' => 'integer',
        'total_row' => 'integer',
        'gcd' => 'integer',
        'total_request_number' => 'integer',
        'current_weight' => 'integer',
        'max_weight' => 'integer',
    ];
}