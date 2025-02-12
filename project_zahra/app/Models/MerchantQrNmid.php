<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantQrNmid extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel yang sesuai
    protected $table = 'merchant_qr_nmids';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'id',
        'payment_gateway_id',
        'merchant_id',
        'sub_merchant_id',
        'store_id',
        'merchant_pan',
        'store_name',
        'criteria',
        'city',
        'mcc',
        'postal_code',
        'status',
        'account_number',
        'account_name',
        'issuer',
        'mdr_type',
        'mdr_value',
    ];

    // Kolom yang harus di-cast ke tipe data tertentu
    protected $casts = [
        'status' => 'boolean',
        'mdr_value' => 'decimal:2', // Cast ke tipe decimal dengan 2 digit di belakang koma
    ];

    // Kolom tanggal (timestamps)
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
