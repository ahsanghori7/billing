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
        Schema::connection('integration')->create('broadcaster_subscribers', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('msisdn');
            $table->integer('Tanla_subscriberID');
            $table->integer('Broad_subscriberID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('broadcaster_subscribers');
    }
};
