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
        Schema::create('current_active_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88)->nullable();
            $table->integer('current')->nullable();
            $table->integer('total_sub')->nullable();
            $table->integer('diff')->nullable();
            $table->integer('subservice')->nullable();
            $table->string('source', 124)->nullable();
            $table->string('subsource', 124)->nullable();
            $table->date('date')->nullable();

            $table->unique(['subservice', 'source', 'subsource', 'Date'], 'unique_values');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_active_v2');
    }
};
