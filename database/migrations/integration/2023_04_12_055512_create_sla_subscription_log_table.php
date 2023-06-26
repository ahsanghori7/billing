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
        Schema::connection('integration')->create('sla_subscription_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type', 88)->nullable();
            $table->string('uuid', 88)->nullable();
            $table->string('bill_id', 88)->nullable();
            $table->string('operator', 88)->nullable();
            $table->string('merchant', 124)->nullable();
            $table->string('campaign', 124)->nullable();
            $table->string('environment', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->string('currency', 88)->nullable();
            $table->string('amount', 88)->nullable();
            $table->string('mode', 88)->nullable();
            $table->string('frequency', 88)->nullable();
            $table->string('status', 88)->nullable();
            $table->string('message', 88)->nullable();
            $table->string('transaction_bill_id', 88)->nullable();
            $table->timestamp('timestamp')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->integer('transaction_id')->nullable();
            $table->boolean('error')->nullable();
            $table->timestamp('date')->nullable()->useCurrent();
            $table->text('parameters')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('sla_subscription_log');
    }
};
