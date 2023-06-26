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
        Schema::connection('integration')->create('relario_web_response', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('transactionId', 88)->nullable()->index('transactionId');
            $table->string('merchantId', 25)->nullable()->index('customerId');
            $table->string('customerId', 25)->nullable()->index('productId');
            $table->string('productId', 25)->nullable()->index('clickId');
            $table->string('productName', 55)->nullable();
            $table->text('smsBody')->nullable();
            $table->text('iosClickToSmsUrl')->nullable();
            $table->text('androidClickToSmsUrl')->nullable();
            $table->text('clickToCallUrl')->nullable();
            $table->text('phoneNumbersList')->nullable();
            $table->string('phoneNumber', 88)->nullable();
            $table->string('ip', 88)->nullable();
            $table->string('clickId', 88)->nullable();
            $table->timestamp('date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('relario_web_response');
    }
};
