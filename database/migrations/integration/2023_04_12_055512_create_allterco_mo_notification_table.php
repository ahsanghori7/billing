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
        Schema::connection('integration')->create('allterco_mo_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('x_request_mo_id', 88)->nullable();
            $table->string('x_request_mo_service', 24)->nullable();
            $table->string('x_request_mo_msisdn', 88)->nullable();
            $table->string('x_request_mo_sc', 8)->nullable();
            $table->text('x_request_mo_text')->nullable();
            $table->string('x_request_mo_op', 24)->nullable();
            $table->string('x_request_mo_carryover', 44)->nullable();
            $table->integer('error_code')->nullable();
            $table->text('description')->nullable();
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
        Schema::connection('integration')->dropIfExists('allterco_mo_notification');
    }
};
