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
        Schema::create('merchant_qr_nmids', function (Blueprint $table) {
            $table->string('id', 255)->primary(); // Kolom "id" sebagai VARCHAR dengan panjang 255
            $table->timestamps(); // Kolom "created_at" dan "updated_at"
            $table->softDeletes(); // Kolom "deleted_at" untuk soft delete
            $table->bigInteger('payment_gateway_id')->nullable(); // Kolom "payment_gateway_id"
            $table->bigInteger('merchant_id')->nullable(); // Kolom "merchant_id"
            $table->string('sub_merchant_id', 15); // Kolom "sub_merchant_id"
            $table->string('store_id', 15)->nullable(); // Kolom "store_id"
            $table->string('merchant_pan', 18); // Kolom "merchant_pan"
            $table->string('store_name', 25); // Kolom "store_name"
            $table->string('criteria', 3); // Kolom "criteria"
            $table->string('city', 15); // Kolom "city"
            $table->string('mcc', 4); // Kolom "mcc"
            $table->string('postal_code', 10); // Kolom "postal_code"
            $table->boolean('status')->nullable(); // Kolom "status"
            $table->text('account_number')->nullable(); // Kolom "account_number"
            $table->text('account_name')->nullable(); // Kolom "account_name"
            $table->text('issuer')->nullable(); // Kolom "issuer"
            $table->text('mdr_type')->nullable(); // Kolom "mdr_type"
            $table->decimal('mdr_value', 8, 2)->nullable(); // Kolom "mdr_value" sebagai DECIMAL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_qr_nmids');
    }
};