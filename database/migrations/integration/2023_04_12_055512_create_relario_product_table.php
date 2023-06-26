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
        Schema::connection('integration')->create('relario_product', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subservice_id')->nullable();
            $table->string('productId', 88)->nullable();
            $table->string('productName', 88)->nullable();
            $table->integer('smsCount')->nullable();
            $table->enum('paymentType', ['sms', 'voice'])->nullable();
            $table->integer('callDuration')->nullable();
            $table->integer('provider_id')->nullable();
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
        Schema::connection('integration')->dropIfExists('relario_product');
    }
};
