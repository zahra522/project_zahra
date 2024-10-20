<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
   

    protected $fillable = [
        'nik',
        'nama',
        'tempat_tanggal_lahir',
        'alamat',
        'nama_ayah',
        'nama_ibu',
    ];
    protected $table = 'santri';

    public function pendidikans() //penghubung dengan table pendidikam
    {
        return $this->belongsTo(pendidikan::class, 'pendidikan', 'id');
    }


}
