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
        Schema::connection('integration')->create('asiacell_dcb_pin_validate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id');
            $table->integer('service_id');
            $table->integer('request_id');
            $table->string('session_id', 88);
            $table->string('account_type', 88);
            $table->string('account', 88)->comment('as msisdn');
            $table->integer('pin');
            $table->integer('response_request_id');
            $table->integer('status');
            $table->integer('reason_code')->nullable();
            $table->integer('response_message');
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
        Schema::connection('integration')->dropIfExists('asiacell_dcb_pin_validate');
    }
};
