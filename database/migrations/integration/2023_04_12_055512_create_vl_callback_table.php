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
        Schema::connection('integration')->create('vl_callback', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('ANI', 88);
            $table->string('AniUniqueIdentifier', 88);
            $table->string('ServiceId', 88);
            $table->string('OperatorId', 88);
            $table->timestamp('SubscriptionDate')->nullable();
            $table->string('SubscriptionStatus', 88)->nullable();
            $table->string('RequestId', 88);
            $table->timestamp('ReceiveDate')->nullable();
            $table->timestamp('UnSubscriptionDate')->nullable();
            $table->string('PinCode', 88)->nullable();
            $table->string('Amount', 88)->nullable();
            $table->string('ChargingStatus', 88)->nullable();
            $table->string('Type', 88);
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
        Schema::connection('integration')->dropIfExists('vl_callback');
    }
};
