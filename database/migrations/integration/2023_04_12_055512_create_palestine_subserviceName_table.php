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
        Schema::connection('integration')->create('palestine_subserviceName', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('BillingSubID');
            $table->integer('serviceID');
            $table->string('DisplayName', 88);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('palestine_subserviceName');
    }
};
