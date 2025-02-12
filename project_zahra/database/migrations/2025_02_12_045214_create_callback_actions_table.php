<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallbackActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callback_actions', function (Blueprint $table) {
            $table->bigIncrements('id'); // int8 NOT NULL DEFAULT nextval('callback_actions_id_seq'::regclass)
            $table->timestamps(); // created_at dan updated_at
            $table->softDeletes(); // deleted_at
            $table->Integer('callback_id'); // int8
            $table->Integer('business_id'); // int8
            $table->text('reference_id');
            $table->text('type');
            $table->text('callback_channel');
            $table->text('source');
            $table->text('url');
            $table->text('additional_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('callback_actions');
    }
}