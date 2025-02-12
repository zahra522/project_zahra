<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('callbacks', function (Blueprint $table) {
            $table->string('id', 255)->primary(); // Kolom "id" sebagai UUID
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->text('type')->nullable();
            $table->text('url')->nullable();
            $table->text('status')->nullable();
            $table->text('transaction_id')->nullable();
            $table->binary('body')->nullable();
            $table->unsignedBigInteger('retry_count')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('callbacks');
    }
};