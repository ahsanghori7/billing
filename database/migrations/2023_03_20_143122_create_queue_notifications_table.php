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
        Schema::create('queue_notifications', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('client_id')->index('client_id');
            $table->string('url', 512);
            $table->string('status', 15);
            $table->string('msisdn', 20);
            $table->integer('subservice_id')->index('subservice_id');
            $table->string('response', 512)->nullable();
            $table->boolean('processed')->default(false);
            $table->dateTime('date_added')->useCurrent();
            $table->dateTime('date_response')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue_notifications');
    }
};
