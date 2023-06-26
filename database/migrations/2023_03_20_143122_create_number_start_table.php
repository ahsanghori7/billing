<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_start', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('startWith', 5);
            $table->string('countryName', 124);
            $table->string('fullName', 124)->nullable();
            $table->string('length', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('number_start');
    }
};
