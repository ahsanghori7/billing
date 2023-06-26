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
        Schema::connection('integration')->create('asiacell_ports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('port', 6)->nullable();
            $table->boolean('status')->nullable();
            $table->dateTime('time_deactivated')->nullable();
            $table->string('port_restart_url', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_ports');
    }
};
