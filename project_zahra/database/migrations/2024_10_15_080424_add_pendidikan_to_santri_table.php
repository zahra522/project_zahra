<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('santri', function (Blueprint $table) {
            $table->string('pendidikan_terakhir')->nullable(); // Adjust the type as needed (e.g., string, integer, etc.)
        });
    }
    
    public function down()
    {
        Schema::table('santri', function (Blueprint $table) {
            $table->dropColumn('pendidikan_terakhir');
        });
    }
    
};
