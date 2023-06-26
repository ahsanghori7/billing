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
        Schema::connection('integration')->create('batelco_subservices', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subserviceID');
            $table->integer('ProductId');
            $table->string('PricePointId', 18);
            $table->string('fallback_price', 18)->nullable();
            $table->string('sub_keyword', 88);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('batelco_subservices');
    }
};
