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
        Schema::create('trace_queue', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->integer('lead_id');
            $table->integer('subservice_id');
            $table->string('action', 24);
            $table->text('url');
            $table->text('last_query');
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
        Schema::dropIfExists('trace_queue');
    }
};
