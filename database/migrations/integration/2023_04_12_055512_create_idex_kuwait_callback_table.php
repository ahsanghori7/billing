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
        Schema::connection('integration')->create('idex_kuwait_callback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ServiceID')->nullable();
            $table->integer('ChannelID')->nullable();
            $table->integer('OperatorID')->nullable();
            $table->integer('RequestID')->nullable();
            $table->string('MSISDN', 25)->nullable()->index('MSISDN');
            $table->string('description', 88)->nullable();
            $table->string('short_description')->nullable();
            $table->string('long_description')->nullable();
            $table->integer('lead_id')->nullable()->index('lead_id');
            $table->integer('subscriber_id')->nullable()->index('subscriber_id');
            $table->char('STATUS', 18)->nullable();
            $table->string('fullrequest')->nullable();
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
        Schema::connection('integration')->dropIfExists('idex_kuwait_callback');
    }
};
