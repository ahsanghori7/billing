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
        Schema::connection('integration')->create('airtel_callback', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('errorCode', 88);
            $table->integer('errorMsg')->nullable();
            $table->integer('xactionId')->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->integer('productId')->nullable();
            $table->string('amount', 88)->nullable();
            $table->date('charging_time')->nullable();
            $table->integer('temp1')->nullable();
            $table->string('temp2', 88)->nullable();
            $table->text('temp3')->nullable();
            $table->string('lowBalance', 88);
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
        Schema::connection('integration')->dropIfExists('airtel_callback');
    }
};
