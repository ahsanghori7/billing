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
        Schema::connection('integration')->create('idex_sub_info', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SubID');
            $table->integer('ServiceID');
            $table->integer('ChannelID');
            $table->integer('OperatorID');
            $table->integer('RequestID');
            $table->string('MSISDN', 25);
            $table->string('ProfileID', 25);
            $table->char('STATUS', 5);
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
        Schema::connection('integration')->dropIfExists('idex_sub_info');
    }
};
