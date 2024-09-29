<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_tanggal_lahir',
        'alamat',
        'pendidikan_terakhir',
        'nama_ayah',
        'nama_ibu',
    ];
}
