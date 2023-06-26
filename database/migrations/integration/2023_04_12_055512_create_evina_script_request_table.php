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
        Schema::connection('integration')->create('evina_script_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t')->nullable();
            $table->integer('s')->nullable();
            $table->boolean('success')->nullable();
            $table->text('e')->nullable();
            $table->text('full_response')->nullable();
            $table->string('ti', 100)->nullable();
            $table->string('te', 100)->nullable();
            $table->timestamp('ts')->nullable();
            $table->text('ok_url')->nullable();
            $table->text('nok_url')->nullable();
            $table->text('signature')->nullable();
            $table->dateTime('date_created')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('evina_script_request');
    }
};
