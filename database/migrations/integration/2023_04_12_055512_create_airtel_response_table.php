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
        Schema::connection('integration')->create('airtel_response', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('cpId', 88)->nullable();
            $table->string('productId', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->string('seTransactionId', 88)->nullable();
            $table->string('seTransactionTime', 88)->nullable();
            $table->string('xActionId', 88)->nullable();
            $table->string('lifecycleId', 88)->nullable();
            $table->string('code', 88)->nullable();
            $table->string('message', 88)->nullable();
            $table->timestamp('Date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('airtel_response');
    }
};
