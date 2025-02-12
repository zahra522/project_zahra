<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallbackExecuteTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callback_execute_times', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' dengan tipe bigInteger dan auto increment
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
            $table->softDeletes(); // Kolom 'deleted_at' untuk soft delete
            $table->integer('callback_id'); // Kolom 'callback_id' dengan tipe text
            $table->integer('transaction_id'); // Kolom 'transaction_id' dengan tipe text
            $table->timestamp('execute_time')->nullable(); // Kolom 'execute_time' dengan tipe timestamp
            $table->Integer('status'); // Kolom 'status' dengan tipe bigInteger
            $table->text('payload_response')->nullable(); // Kolom 'payload_response' dengan tipe text
            $table->text('sender'); // Kolom 'sender' dengan tipe text
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('callback_execute_times');
    }
}