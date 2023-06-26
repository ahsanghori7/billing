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
        Schema::create('countries_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('country_name', 150);
            $table->char('alias', 2)->nullable();
            $table->string('east_time', 88)->nullable();
            $table->string('west_time', 88)->nullable();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_v2');
    }
};
