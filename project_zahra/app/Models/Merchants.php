<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel yang sesuai
    protected $table = 'merchants';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'business_id',
        'merchant_ref',
        'name',
        'qris_callback_url',
        'is_live',
    ];

    // Kolom yang harus di-cast ke tipe data tertentu
    protected $casts = [
        'is_live' => 'boolean', // Cast kolom "is_live" ke tipe boolean
    ];

    // Kolom tanggal (timestamps)
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}