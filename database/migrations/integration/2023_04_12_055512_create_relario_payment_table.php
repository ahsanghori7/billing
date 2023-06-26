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
        Schema::connection('integration')->create('relario_payment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('transactionId', 88)->nullable();
            $table->string('paymentType', 25)->nullable();
            $table->string('paymentId', 25)->nullable();
            $table->string('productId', 25)->nullable();
            $table->string('productName', 55)->nullable();
            $table->string('customerId', 55)->nullable();
            $table->string('sourcePhoneNumber', 55)->nullable();
            $table->string('destinationPhoneNumber', 55)->nullable();
            $table->string('callDuration', 55)->nullable();
            $table->text('initiatedAt')->nullable();
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
        Schema::connection('integration')->dropIfExists('relario_payment');
    }
};
