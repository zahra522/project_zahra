<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id('nik',100);
            $table->string('nama', 20);
            $table->string('tempat_tanggal_lahir', 100);
            $table->string('alamat', 30);
            $table->string('pendidikan_terakhir', 10);
            $table->string('nama_ayah', 50);
            $table->string('nama_ibu', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};
