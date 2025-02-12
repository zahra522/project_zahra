<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' dengan tipe bigInteger dan auto increment
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
            $table->softDeletes(); // Kolom 'deleted_at' untuk soft delete
            $table->string('transaction_histories_id')->unique(); // Kolom 'transaction_history_id' dengan tipe text dan unique
            $table->string('transaction_id');
            $table->bigInteger('business_id');
            $table->string('reference_internal_id');
            $table->string('reference_id');
            $table->integer('history_action');
            $table->integer('history_status');
            $table->boolean('is_live')->default(false);
            $table->bigInteger('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_histories');
    }
}