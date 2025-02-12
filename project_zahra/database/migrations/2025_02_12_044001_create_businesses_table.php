<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id'); // int8 NOT NULL DEFAULT nextval('businesses_id_seq'::regclass)
            $table->timestamps(); // created_at dan updated_at
            $table->softDeletes(); // deleted_at
            $table->text('name');
            $table->text('address');
            $table->text('country');
            $table->text('country_code');
            $table->text('phone_number');
            $table->text('email');
            $table->text('website');
            $table->text('type');
            $table->text('logo_path');
            $table->text('primary_color');
            $table->text('header_title');
            $table->text('button_color');
            $table->text('button_text_color');
            $table->text('admin_action');
            $table->bigInteger('status'); // int8
            $table->text('remark_from_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}