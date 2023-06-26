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
        Schema::create('wrongmo', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subservice_id')->nullable();
            $table->integer('sc')->nullable();
            $table->text('not_subscribed')->nullable();
            $table->text('wrong_subscribed')->nullable();
            $table->text('wrong_unsubscribed')->nullable();
            $table->string('encoding', 2)->nullable();
            $table->integer('defaultSID')->nullable();
            $table->integer('IntegrationID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wrongmo');
    }
};
