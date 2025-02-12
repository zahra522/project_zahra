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
        Schema::create('nns', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom "id" sebagai primary key dengan auto-increment
            $table->timestamps();
            $table->softDeletes();
            $table->text('name');
            $table->text('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nns');
    }
};