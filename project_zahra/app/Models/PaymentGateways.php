<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentGatewaysphp extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment_gateways';

    protected $fillable = [
        'name',
        'provider',
        'production_api_url',
        'sandbox_api_url',
    ];

    protected $dates = ['deleted_at'];
}