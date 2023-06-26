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
        Schema::connection('integration')->create('tpay_services', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SubserviceID');
            $table->integer('tpay_subserviceID');
            $table->integer('subscriptionPlanId');
            $table->string('initialPaymentproductId', 124);
            $table->string('recurringPaymentproductId', 124);
            $table->string('productCatalogName', 124);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('tpay_services');
    }
};
