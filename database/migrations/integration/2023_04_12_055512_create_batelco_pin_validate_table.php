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
        Schema::connection('integration')->create('batelco_pin_validate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88)->nullable();
            $table->string('message', 88);
            $table->boolean('inError');
            $table->string('requestId', 88);
            $table->string('code', 24);
            $table->string('externalTxId', 100);
            $table->string('subscriptionResult', 88)->nullable();
            $table->string('subscriptionError', 88)->nullable();
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('batelco_pin_validate');
    }
};
