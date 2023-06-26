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
        Schema::connection('integration')->create('viva_bahrain_pin_request_temp', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88)->nullable();
            $table->string('externalTxId', 100)->nullable();
            $table->timestamp('Date')->nullable()->useCurrent();
            $table->text('authentication')->nullable();
            $table->text('apikey')->nullable();
            $table->text('external-tx-id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('viva_bahrain_pin_request_temp');
    }
};
