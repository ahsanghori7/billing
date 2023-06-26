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
        Schema::connection('integration')->create('relario_transaction_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('transactionId', 88)->nullable();
            $table->string('productId', 25)->nullable();
            $table->string('productName', 55)->nullable();
            $table->string('customerId', 25)->nullable();
            $table->text('smsBody')->nullable();
            $table->text('iosClickToSmsUrl')->nullable();
            $table->text('androidClickToSmsUrl')->nullable();
            $table->text('phoneNumbersList')->nullable();
            $table->text('paymentType')->nullable();
            $table->integer('smsCount')->nullable();
            $table->string('callDuration', 55)->nullable();
            $table->string('customerIpAddress', 55)->nullable();
            $table->string('customerMsisdn', 88)->nullable();
            $table->string('customerMccmnc', 20)->nullable();
            $table->string('customerCountryCode', 20)->nullable();
            $table->char('status', 10)->nullable();
            $table->string('payment_id', 25)->nullable();
            $table->string('payment_transaction_id', 88)->nullable();
            $table->string('payment_cli', 55)->nullable();
            $table->string('payment_ddi', 55)->nullable();
            $table->text('payment_smsBody')->nullable();
            $table->string('payment_callDuration', 55)->nullable();
            $table->string('payment_initiatedAt', 88)->nullable();
            $table->string('payment_billable', 25)->nullable();
            $table->timestamp('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('relario_transaction_detail');
    }
};
