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
        Schema::connection('integration')->create('asiacell_dcb_notifications', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('service_id');
            $table->string('channel_id', 88);
            $table->string('operator_id', 88);
            $table->string('request_id', 88);
            $table->string('msisdn', 88);
            $table->char('status', 25);
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_dcb_notifications');
    }
};
