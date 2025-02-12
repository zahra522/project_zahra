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
        Schema::create('transaction_balance_histories', function (Blueprint $table) {
            $table->string('id', 255)->primary(); // Kolom "id" sebagai primary key
            $table->timestamps(); // Kolom "created_at" dan "updated_at"
            $table->softDeletes(); // Kolom "deleted_at" untuk soft delete
            $table->text('transaction_balance_id')->nullable(); // Kolom "transaction_balance_id"
            $table->text('transaction_id')->nullable(); // Kolom "transaction_id"
            $table->bigInteger('business_id')->nullable(); // Kolom "business_id"
            $table->text('reference_internal_id')->nullable(); // Kolom "reference_internal_id"
            $table->text('reference_id')->nullable(); // Kolom "reference_id"
            $table->integer('type')->nullable(); // Kolom "type"
            $table->integer('sub_type')->nullable(); // Kolom "sub_type"
            $table->integer('payment_channel')->nullable(); // Kolom "payment_channel"
            $table->timestamp('payment_date')->nullable(); // Kolom "payment_date"
            $table->text('channel_code')->nullable(); // Kolom "channel_code"
            $table->boolean('is_live')->nullable(); // Kolom "is_live"
            $table->bigInteger('amount')->nullable(); // Kolom "amount"
            $table->bigInteger('balance')->nullable(); // Kolom "balance"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_balance_histories');
    }
};