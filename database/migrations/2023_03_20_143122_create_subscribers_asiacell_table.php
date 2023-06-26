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
        Schema::create('subscribers_asiacell', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('status');
            $table->string('msisdn', 88)->index('msisdn');
            $table->integer('Country_ID');
            $table->integer('Operators_ID')->nullable()->index('Operators_ID');
            $table->integer('Shortcode')->nullable();
            $table->string('FreeShortcode', 15)->nullable();
            $table->integer('Service_ID');
            $table->integer('subService_ID')->index('subService_ID');
            $table->integer('ContentGroup');
            $table->string('pin', 18)->nullable()->index('pin');
            $table->integer('Cseq')->index('CSeq');
            $table->dateTime('Subdate');
            $table->string('deliveryState', 88)->nullable();
            $table->integer('content_folders_ID')->nullable();
            $table->string('source', 88)->default('Atlas')->index('source');
            $table->string('subsource', 88)->default('Atlas')->index('subsource');
            $table->string('NextContent', 88)->nullable();
            $table->integer('SuccessBilling')->nullable()->default(0);
            $table->integer('BillAttempts')->nullable()->default(0);
            $table->string('IP', 88);
            $table->string('minisite', 124);
            $table->string('LastSuccBill', 88)->nullable();
            $table->integer('Integration_ID')->nullable()->index('Integration_ID');
            $table->string('FirstBilling', 88)->nullable();
            $table->string('LastDelivery', 88)->nullable();
            $table->timestamp('NextBilling')->nullable();
            $table->string('NextRetry', 88)->nullable();
            $table->integer('Leads_ID')->index('Leads_ID');
            $table->text('info')->nullable();
            $table->integer('Retries')->nullable();
            $table->tinyInteger('Used')->nullable()->default(0);
            $table->boolean('ProcessingMessage')->default(false);
            $table->boolean('SubsLock')->default(false);
            $table->boolean('IsFree')->default(false);
            $table->integer('CountSent')->default(0);
            $table->boolean('Validity')->default(false);
            $table->boolean('is_billed')->default(false);

            $table->unique(['msisdn', 'Service_ID', 'subService_ID', 'Shortcode'], 'msisdn_2');
            $table->index(['Integration_ID'], 'Integration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers_asiacell');
    }
};
