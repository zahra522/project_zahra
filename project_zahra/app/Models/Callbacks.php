<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Callback extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'callbacks';

    /**
     * Kolom yang dapat diisi (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'business_id',
        'type',
        'url',
        'status',
        'transaction_id',
        'body',
        'retry_count',
    ];

    /**
     * Kolom yang harus disembunyikan saat serialisasi.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * Kolom yang harus di-cast ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'body' => 'binary', // Cast kolom "body" ke tipe binary
    ];
}
