<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGatewayMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gateway_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('payment_gateway_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('payment_gateway_credential_id');
            $table->decimal('percentage_fee', 10, 2)->nullable();
            $table->bigInteger('fee')->nullable();
            $table->text('type');
            $table->text('status');
            $table->boolean('is_alive')->default(false);
            $table->bigInteger('min_amount')->nullable();
            $table->bigInteger('max_amount')->nullable();
            $table->boolean('is_charge_merchant')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_gateway_methods');
    }
}