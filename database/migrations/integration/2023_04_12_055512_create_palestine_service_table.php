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
        Schema::connection('integration')->create('palestine_service', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('TransactionType', 88);
            $table->integer('MerchantID');
            $table->integer('ByLebSubserviceID');
            $table->integer('ServiceID');
            $table->integer('PurchaseTypeId');
            $table->integer('ProductAmount');
            $table->string('OrderPrice', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('palestine_service');
    }
};
