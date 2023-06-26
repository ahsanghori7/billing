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
        Schema::connection('integration')->create('broadcaster_traffication', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('messageID');
            $table->integer('msisdn');
            $table->integer('SubscriberID');
            $table->boolean('tarifficated');
            $table->string('ariff_code', 44);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('broadcaster_traffication');
    }
};
