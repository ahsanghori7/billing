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
        Schema::connection('integration')->create('sla_mo_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type', 88);
            $table->string('uuid', 124);
            $table->string('bill_id', 88)->nullable();
            $table->string('operator', 88);
            $table->string('merchant', 124);
            $table->string('campaign', 124);
            $table->string('environment', 88);
            $table->string('msisdn', 88);
            $table->string('currency', 88);
            $table->string('amount', 88);
            $table->string('mode', 88);
            $table->string('frequency', 88);
            $table->timestamp('next_payment_timestamp')->nullable();
            $table->string('status', 88);
            $table->string('transaction_bill_id', 88)->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->string('transaction_id', 88)->nullable();
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('sla_mo_notification');
    }
};
