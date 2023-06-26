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
        Schema::create('starting_numbers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('country_id');
            $table->integer('operator_id');
            $table->integer('country_dial_code');
            $table->integer('starting_with');
            $table->integer('max_length');
            $table->integer('prefix')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('starting_numbers');
    }
};
