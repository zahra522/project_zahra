<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGatewayCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gateway_credentials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('payment_gateway_id');
            $table->text('name');
            $table->text('merchant_code')->nullable();
            $table->text('api_key')->nullable();
            $table->text('client_id')->nullable();
            $table->text('merchant_user_id')->nullable();
            $table->text('additional_data')->nullable();
            $table->boolean('is_alive')->default(false);
            $table->text('private_key')->nullable();
            $table->text('public_key')->nullable();
            $table->text('validation_key')->nullable();
            $table->text('snap_client_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_gateway_credentials');
    }
}