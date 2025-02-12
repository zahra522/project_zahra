<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGatewayMethodStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gateway_method_stats', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom 'id' sebagai primary key dengan tipe bigInteger dan auto increment
            $table->timestamps(); // Ini akan membuat kolom 'created_at' dan 'updated_at'
            $table->string('request_id')->nullable();
            $table->bigInteger('credential_id');
            $table->string('response_code')->nullable();
            $table->boolean('is_success')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_gateway_method_stats');
    }
}