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
        Schema::connection('integration')->create('ooredoo_kuwait_request_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('requestType')->nullable();
            $table->string('serviceNode', 20)->nullable();
            $table->string('sequenceNo', 20)->nullable();
            $table->string('serviceType', 20)->nullable();
            $table->string('serviceId', 20)->nullable();
            $table->string('bearerId', 15)->nullable();
            $table->string('chargeAmount', 5)->nullable();
            $table->string('planId', 25)->nullable();
            $table->string('asyncFlag', 5)->nullable();
            $table->string('renewalFlag', 5)->nullable();
            $table->string('bundleType', 5)->nullable();
            $table->string('serviceUsage', 5)->nullable();
            $table->string('promoId', 25)->nullable();
            $table->string('subscriptionFlag', 5)->nullable();
            $table->string('optionalParameter1', 250)->nullable();
            $table->string('optionalParameter2', 25)->nullable();
            $table->string('optionalParameter3', 25)->nullable();
            $table->string('optionalParameter4', 25)->nullable();
            $table->string('optionalParameter5', 25)->nullable();
            $table->string('optionalParameter6', 25)->nullable();
            $table->string('optionalParameter7', 25)->nullable();
            $table->string('optionalParameter8', 25)->nullable();
            $table->string('optionalParameter9', 25)->nullable();
            $table->string('optionalParameter10', 25)->nullable();
            $table->string('optionalParameter11', 25)->nullable();
            $table->string('optionalParameter12', 25)->nullable();
            $table->integer('UserID')->nullable();
            $table->text('FullRequest')->nullable();
            $table->text('FullResponse')->nullable();
            $table->integer('ResponseEssence')->nullable();
            $table->string('callingParty', 25)->nullable();
            $table->dateTime('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_kuwait_request_log');
    }
};
