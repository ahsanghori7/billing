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
        Schema::connection('integration')->create('tpay_subscribe', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ServiceID');
            $table->integer('subscriptionPlanId');
            $table->string('initialPaymentproductId', 88);
            $table->string('initialPaymentDate', 88);
            $table->string('executeInitialPaymentNow', 5);
            $table->string('recurringPaymentproductId', 88);
            $table->string('productCatalogName', 88);
            $table->string('executeRecurringPaymentNow', 5);
            $table->string('contractStartDate', 88);
            $table->string('contractEndDate', 88);
            $table->string('autoRenewContract', 5);
            $table->enum('language', ['1', '2', '3']);
            $table->string('sendVerificationSMS', 5);
            $table->string('allowMultipleFreeStartPeriods', 5)->nullable();
            $table->string('headerEnrichmentReferenceCode', 88);
            $table->string('smsId', 18);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('tpay_subscribe');
    }
};
