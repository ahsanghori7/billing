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
        Schema::create('trace_process_subscriber', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id');
            $table->integer('subscriber_id');
            $table->string('msisdn', 88);
            $table->integer('subservice_id');
            $table->integer('service_id');
            $table->boolean('process');
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
        Schema::dropIfExists('trace_process_subscriber');
    }
};
