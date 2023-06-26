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
        Schema::connection('integration')->create('idex_ksa_callback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ServiceID');
            $table->integer('ChannelID');
            $table->integer('OperatorID');
            $table->integer('RequestID');
            $table->string('MSISDN', 25);
            $table->char('STATUS', 5);
            $table->string('Price', 18)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('idex_ksa_callback');
    }
};
