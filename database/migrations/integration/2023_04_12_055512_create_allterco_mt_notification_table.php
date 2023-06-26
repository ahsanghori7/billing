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
        Schema::connection('integration')->create('allterco_mt_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('x_request_dlr_id', 88)->nullable();
            $table->string('x_request_dlr_status', 24)->nullable();
            $table->timestamp('x_request_dlr_time')->nullable();
            $table->string('x_request_dlr_carryover', 88)->nullable();
            $table->integer('x_request_dlr_code')->nullable();
            $table->string('x_request_dlr_op', 24)->nullable();
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
        Schema::connection('integration')->dropIfExists('allterco_mt_notification');
    }
};
