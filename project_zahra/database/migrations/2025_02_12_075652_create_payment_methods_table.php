<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('code');
            $table->text('name');
            $table->text('icon')->nullable();
            $table->text('type');
            $table->text('status');
            $table->bigInteger('default_fee')->nullable();
            $table->decimal('default_percentage_fee', 10, 2)->nullable();
            $table->bigInteger('default_cost')->nullable();
            $table->decimal('default_percentage_cost', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}