<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentGatewayCredentials extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment_gateway_credentials';

    protected $fillable = [
        'payment_gateway_id',
        'name',
        'merchant_code',
        'api_key',
        'client_id',
        'merchant_user_id',
        'additional_data',
        'is_alive',
        'private_key',
        'public_key',
        'validation_key',
        'snap_client_id',
    ];

    protected $dates = ['deleted_at'];
}