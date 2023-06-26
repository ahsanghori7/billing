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
        Schema::connection('integration')->create('du_subscribers_billing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscriber_id');
            $table->integer('subservice_id');
            $table->string('msisdn', 88);
            $table->timestamp('subdate')->nullable();
            $table->timestamp('next_billing')->default(null);
            $table->integer('nb_success_billing')->nullable();
            $table->integer('nb_full_price')->nullable();
            $table->integer('nb_fallback_price')->nullable();
            $table->integer('nb_failed_billing')->nullable();
            $table->timestamp('Date')->nullable()->useCurrent();

            $table->unique(['subscriber_id', 'subservice_id'], 'subscriber_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_subscribers_billing');
    }
};
