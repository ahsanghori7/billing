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
        Schema::connection('integration')->create('dvm_subscriber', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('TenlaSubID');
            $table->integer('subscriberID');
            $table->string('msisdn', 88);
            $table->string('Pincode', 18);
            $table->integer('spid');
            $table->integer('opid');
            $table->string('aboid', 88);
            $table->text('RequestID');
            $table->integer('ExternalID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('dvm_subscriber');
    }
};
