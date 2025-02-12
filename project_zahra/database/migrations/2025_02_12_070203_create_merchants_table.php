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
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom "id" sebagai primary key dengan auto-increment
            $table->timestamps(); // Kolom "created_at" dan "updated_at"
            $table->softDeletes(); // Kolom "deleted_at" untuk soft delete
            $table->bigInteger('business_id')->nullable(); // Kolom "business_id"
            $table->text('merchant_ref')->nullable(); // Kolom "merchant_ref"
            $table->text('name')->nullable(); // Kolom "name"
            $table->text('qris_callback_url')->nullable(); // Kolom "qris_callback_url"
            $table->boolean('is_live')->nullable(); // Kolom "is_live"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};