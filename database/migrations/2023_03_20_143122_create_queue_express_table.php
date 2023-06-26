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
        Schema::create('queue_express', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('message', 1000);
            $table->string('subscriber', 30)->index('subscriber');
            $table->string('token', 200)->nullable()->default('1');
            $table->string('shortcode', 10);
            $table->integer('SubscriberID');
            $table->string('MessageID', 20);
            $table->string('IntegrationFile');
            $table->integer('encoding')->nullable();
            $table->integer('userID')->nullable();
            $table->tinyInteger('Used')->nullable()->default(0);
            $table->integer('operator')->nullable();
            $table->integer('IntegrationID')->nullable();
            $table->dateTime('Inserted')->nullable()->useCurrent();
            $table->string('Type', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue_express');
    }
};
