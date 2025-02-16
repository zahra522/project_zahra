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
        Schema::create('callback_execute_times', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
                $table->timestamps(); // Created_at and Updated_at
                $table->softDeletes(); // Deleted_at for soft delete
                $table->integer('callback_id'); // Integer column for callback_id
                $table->integer('transaction_id'); // Integer column for transaction_id
                $table->timestamp('execute_time')->nullable(); // Nullable timestamp
                $table->integer('status'); // Integer column for status
                $table->text('payload_response')->nullable(); // Nullable text for payload response
                $table->text('sender'); // Text column for sender
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callback_execute_times');
    }
};
