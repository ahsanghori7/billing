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
        Schema::connection('integration')->create('palestine_callback', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('MSISDN', 88)->index('MSISDN');
            $table->string('ServiceID', 88);
            $table->string('Status', 88);
            $table->integer('OperatorID');
            $table->string('TimeStamp', 88);
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
        Schema::connection('integration')->dropIfExists('palestine_callback');
    }
};
