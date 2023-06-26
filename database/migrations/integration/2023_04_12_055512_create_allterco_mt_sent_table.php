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
        Schema::connection('integration')->create('allterco_mt_sent', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('x_request_mt_service', 24);
            $table->text('x_request_mt_text');
            $table->string('x_request_mt_id', 100);
            $table->boolean('x_request_mt_charge');
            $table->boolean('x_request_mt_dlr');
            $table->integer('x_request_mt_sc');
            $table->string('x_request_mt_msisdn', 88);
            $table->integer('x_request_mt_op');
            $table->string('x_request_mt_carryover', 100)->nullable();
            $table->integer('error_code');
            $table->text('description');
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
        Schema::connection('integration')->dropIfExists('allterco_mt_sent');
    }
};
