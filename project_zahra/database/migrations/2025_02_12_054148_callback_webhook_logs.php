<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('callback_webhook_logs', function (Blueprint $table) {
            $table->bigIncrements('id'); // Perbaikan di sini
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->text('callback_id')->nullable();
            $table->unsignedBigInteger('callback_action_id')->nullable();
            $table->text('url')->nullable();
            $table->text('payload')->nullable();
            $table->unsignedBigInteger('response_status_code')->nullable();
            $table->text('source')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('callback_webhook_logs');
    }
};