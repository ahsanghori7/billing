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
        Schema::connection('integration')->create('actel_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subservice_id')->nullable();
            $table->integer('app_id')->nullable();
            $table->integer('lang_id')->nullable();
            $table->string('buy_channel', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('actel_applications');
    }
};
