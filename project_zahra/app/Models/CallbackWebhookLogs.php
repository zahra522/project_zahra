<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallbackWebhookLogs extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'callback_webhook_logs';

    /**
     * Kolom yang dapat diisi (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'business_id',
        'callback_id',
        'callback_action_id',
        'url',
        'payload',
        'response_status_code',
        'source',
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
    ];
}