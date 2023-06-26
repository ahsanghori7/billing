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
        Schema::connection('integration')->create('vl_fees', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('serviceId');
            $table->char('CurrencyCode', 8);
            $table->char('Amount', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('vl_fees');
    }
};
