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
        Schema::connection('integration')->create('du_leads', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('leadID');
            $table->string('msisdn', 88);
            $table->char('product_id', 18);
            $table->char('txId', 24)->nullable();
            $table->string('correlatorId', 88);
            $table->integer('sendOtpStatus')->nullable();
            $table->string('sendOtpStatusDesc', 124)->nullable();
            $table->text('FullResponse')->nullable();
            $table->integer('landing_id')->nullable();
            $table->timestamp('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_leads');
    }
};
