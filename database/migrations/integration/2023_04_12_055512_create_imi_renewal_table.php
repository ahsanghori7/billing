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
        Schema::connection('integration')->create('imi_renewal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->string('sid', 6);
            $table->char('channel', 10);
            $table->string('action', 24);
            $table->string('status', 24);
            $table->timestamp('nextrenewaldate')->nullable();
            $table->string('transactionid', 124);
            $table->string('price', 24)->nullable();
            $table->string('type', 24);
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
        Schema::connection('integration')->dropIfExists('imi_renewal');
    }
};
