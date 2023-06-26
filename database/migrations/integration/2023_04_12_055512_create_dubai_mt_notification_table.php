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
        Schema::connection('integration')->create('dubai_mt_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('productId');
            $table->integer('pricepointId');
            $table->integer('mcc');
            $table->char('mnc', 3);
            $table->string('userIdentifier', 88);
            $table->integer('largeAccount');
            $table->string('transactionUUID', 124);
            $table->string('mnoDeliveryCode', 88);
            $table->text('tags');
            $table->string('entryChannel', 88)->nullable();
            $table->string('trackingId', 88)->nullable();
            $table->string('totalCharged', 15)->nullable();
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
        Schema::connection('integration')->dropIfExists('dubai_mt_notification');
    }
};
