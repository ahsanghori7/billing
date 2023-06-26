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
        Schema::connection('integration')->create('blink_subscriber', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('TenlaSubID');
            $table->string('blink_subID', 88);
            $table->integer('TenlaServiceID');
            $table->string('serviceID', 88);
            $table->integer('operatorID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('blink_subscriber');
    }
};
