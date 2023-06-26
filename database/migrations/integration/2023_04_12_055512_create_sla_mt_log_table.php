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
        Schema::connection('integration')->create('sla_mt_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->text('request_parameters');
            $table->string('correlator', 88);
            $table->string('response', 88);
            $table->text('response_message');
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
        Schema::connection('integration')->dropIfExists('sla_mt_log');
    }
};
