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
        Schema::connection('integration')->create('batelco_renewal_notification_old', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('productId')->nullable();
            $table->integer('pricepointId')->nullable();
            $table->integer('mcc')->nullable();
            $table->integer('mnc')->nullable();
            $table->string('entryChannel', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->integer('largeAccount')->nullable();
            $table->string('transactionUUID', 124)->nullable();
            $table->string('mnoDeliveryCode', 88)->nullable();
            $table->text('text')->nullable();
            $table->text('tags')->nullable();
            $table->text('response')->nullable();
            $table->timestamp('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('batelco_renewal_notification_old');
    }
};
