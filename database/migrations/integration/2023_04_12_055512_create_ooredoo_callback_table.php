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
        Schema::connection('integration')->create('ooredoo_callback', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('callingParty', 15)->nullable()->index('callingParty');
            $table->string('serviceType', 25)->nullable();
            $table->string('serviceId', 25)->nullable();
            $table->string('sequenceNo', 25)->nullable();
            $table->string('chargeAmount', 10)->nullable();
            $table->string('requestPlan', 25)->nullable();
            $table->string('appliedPlan', 25)->nullable();
            $table->string('discountPlan', 25)->nullable();
            $table->string('validityDays', 10)->nullable();
            $table->string('operationId', 4)->nullable();
            $table->string('bearerId', 15)->nullable();
            $table->string('errorCode', 15)->nullable();
            $table->string('result', 100)->nullable();
            $table->string('optParam1', 25)->nullable();
            $table->string('optParam2', 25)->nullable();
            $table->string('optParam3', 25)->nullable();
            $table->string('optParam4', 25)->nullable();
            $table->string('optParam5', 25)->nullable();
            $table->integer('UserID')->nullable();
            $table->integer('contentId');
            $table->string('category', 15);
            $table->dateTime('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_callback');
    }
};
