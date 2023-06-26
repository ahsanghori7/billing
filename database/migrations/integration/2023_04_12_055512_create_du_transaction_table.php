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
        Schema::connection('integration')->create('du_transaction', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('userID');
            $table->string('msisdn', 25);
            $table->string('transactionID', 88);
            $table->string('du_transactionID', 88);
            $table->dateTime('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_transaction');
    }
};
