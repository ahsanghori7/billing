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
        Schema::connection('integration')->create('telenor_callback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('productCode', 88);
            $table->string('msisdn', 88);
            $table->string('chargingType', 88);
            $table->date('nextRenewDate');
            $table->string('fee', 88);
            $table->string('lifeCycle', 88);
            $table->string('reason', 88);
            $table->string('ProcessedTime', 88);
            $table->string('Lang', 88);
            $table->string('billingId', 88);
            $table->string('clientTransactionId', 88);
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
        Schema::connection('integration')->dropIfExists('telenor_callback');
    }
};
