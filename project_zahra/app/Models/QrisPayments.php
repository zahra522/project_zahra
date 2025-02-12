<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrisPayments extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'qris_payments';

    protected $fillable = [
        'id',
        'internal_reference_id',
        'business_id',
        'merchant_id',
        'merchant_ref',
        'merchant_name',
        'gateway_payment_method_id',
        'transaction_id',
        'payment_gateway_reference_id',
        'result_code',
        'reference_id',
        'external_id',
        'type',
        'currency',
        'total_amount',
        'amount',
        'fee',
        'cost',
        'expires_at',
        'channel_code',
        'qr_string',
        'qr_image',
        'qr_url',
        'status',
        'provider_name',
        'callback_url',
        'is_live',
        'partner_reference_no',
        'terminal_id',
        'terminal_type',
        'additional_data',
        'issuer_nns',
        'issuer_name',
        'sub_merchant_id',
        'store_id',
        'store_info',
        'payment_date',
        'retrieval_reference_no',
        'bill_number',
        'refund_retrieval_reference_no',
        'transaction_refund_id',
    ];

    protected $dates = ['deleted_at', 'expires_at'];
}