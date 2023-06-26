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
        Schema::connection('integration')->create('du_billing_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscriber_id');
            $table->string('msisdn', 88);
            $table->integer('subservice_id');
            $table->string('amount', 10)->nullable();
            $table->string('type', 122);
            $table->timestamp('next_billing')->useCurrent();
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
        Schema::connection('integration')->dropIfExists('du_billing_log');
    }
};
