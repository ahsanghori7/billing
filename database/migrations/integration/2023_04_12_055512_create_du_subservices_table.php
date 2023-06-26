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
        Schema::connection('integration')->create('du_subservices', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subserviceID');
            $table->integer('PartnerRoleId')->index('PartnerRoleId');
            $table->integer('ProductId')->index('ProductId');
            $table->string('PricePointId', 18)->index('PricePointId');
            $table->string('fallback_price', 18)->nullable()->index('fallback_price');
            $table->integer('mt_free_price')->index('mt_free_price');
            $table->integer('validity')->index('validity');
            $table->string('thankyou_page', 124)->nullable();
            $table->string('error_page', 124)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_subservices');
    }
};
