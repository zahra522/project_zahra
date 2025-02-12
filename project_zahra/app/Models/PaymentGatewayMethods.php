<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentGatewayMethods extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment_gateway_methods';

    protected $fillable = [
        'payment_gateway_id',
        'payment_method_id',
        'payment_gateway_credential_id',
        'percentage_fee',
        'fee',
        'type',
        'status',
        'is_alive',
        'min_amount',
        'max_amount',
        'is_charge_merchant',
    ];

    protected $dates = ['deleted_at'];
}
