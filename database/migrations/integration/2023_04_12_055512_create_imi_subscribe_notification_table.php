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
        Schema::connection('integration')->create('imi_subscribe_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 12);
            $table->char('sid', 24);
            $table->string('channel', 60);
            $table->char('action', 25);
            $table->string('status', 25);
            $table->timestamp('nextrenewaldate')->nullable();
            $table->string('transactionid', 124);
            $table->char('price', 10)->nullable();
            $table->char('type', 24);
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('imi_subscribe_notification');
    }
};
