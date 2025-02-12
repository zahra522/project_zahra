<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' dengan tipe bigInteger dan auto increment
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
            $table->softDeletes(); // Kolom 'deleted_at' untuk soft delete
            $table->string('settlement_id')->unique(); // Kolom 'settlement_id' dengan tipe text dan unique
            $table->bigInteger('business_id');
            $table->string('transaction_id');
            $table->string('reference_internal_id');
            $table->string('reference_id');
            $table->string('receipt_number');
            $table->bigInteger('status');
            $table->timestamp('settlement_date')->nullable();
            $table->bigInteger('approved_by')->nullable();
            $table->text('remark')->nullable();
            $table->bigInteger('payment_channel');
            $table->string('channel_code');
            $table->string('payment_identifier');
            $table->timestamp('payment_date')->nullable();
            $table->string('account_number');
            $table->bigInteger('amount');
            $table->string('partner_code');
            $table->text('meta_data')->nullable();
            $table->boolean('is_live')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}