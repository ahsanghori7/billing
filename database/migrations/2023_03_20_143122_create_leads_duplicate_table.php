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
        Schema::create('leads_duplicate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('leads_id');
            $table->string('msisdn', 88)->index('msisdn');
            $table->string('pin', 18)->nullable();
            $table->timestamp('date_send')->useCurrent();
            $table->boolean('subscribers')->nullable();
            $table->dateTime('subdate')->nullable();
            $table->dateTime('unsubdate')->nullable();
            $table->string('unsub_comment', 124)->nullable();

            $table->index(['leads_id', 'msisdn', 'Subdate'], 'leads_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads_duplicate');
    }
};
