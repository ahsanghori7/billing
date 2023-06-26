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
        Schema::connection('integration')->create('tpay_errors', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Status', 88);
            $table->string('StatusDisplay', 124);
            $table->integer('StatusCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('tpay_errors');
    }
};
