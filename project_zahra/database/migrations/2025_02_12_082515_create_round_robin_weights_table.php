<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundRobinWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_robin_weights', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' dengan tipe bigInteger dan auto increment
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
            $table->softDeletes(); // Kolom 'deleted_at' untuk soft delete
            $table->bigInteger('payment_method_id');
            $table->bigInteger('total_row');
            $table->bigInteger('gcd');
            $table->bigInteger('total_request_number');
            $table->bigInteger('current_weight');
            $table->bigInteger('max_weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round_robin_weights');
    }
}