<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrisPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qris_payments', function (Blueprint $table) {
            $table->string('id', 255)->primary(); 
            $table->timestamps();
            $table->softDeletes();
            $table->text('internal_reference_id')->nullable();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->unsignedBigInteger('merchant_id')->nullable();
            $table->text('merchant_ref')->nullable();
            $table->text('merchant_name')->nullable();
            $table->unsignedBigInteger('gateway_payment_method_id')->nullable();
            $table->text('transaction_id')->nullable();
            $table->text('payment_gateway_reference_id')->nullable();
            $table->text('result_code')->nullable();
            $table->text('reference_id')->nullable();
            $table->text('external_id')->nullable();
            $table->text('type')->nullable();
            $table->text('currency')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->bigInteger('fee')->nullable();
            $table->bigInteger('cost')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->text('channel_code')->nullable();
            $table->text('qr_string')->nullable();
            $table->text('qr_image')->nullable();
            $table->text('qr_url')->nullable();
            $table->integer('status')->nullable();
            $table->text('provider_name')->nullable();
            $table->text('callback_url')->nullable();
            $table->boolean('is_live')->default(false);
            $table->text('partner_reference_no')->nullable();
            $table->text('terminal_id')->nullable();
            $table->text('terminal_type')->nullable();
            $table->text('additional_data')->nullable();
            $table->text('issuer_nns')->nullable();
            $table->text('issuer_name')->nullable();
            $table->text('sub_merchant_id')->nullable();
            $table->text('store_id')->nullable();
            $table->text('store_info')->nullable();
            $table->text('payment_date')->nullable();
            $table->text('retrieval_reference_no')->nullable();
            $table->string('bill_number', 25)->nullable();
            $table->text('refund_retrieval_reference_no')->nullable();
            $table->text('transaction_refund_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qris_payments');
    }
}