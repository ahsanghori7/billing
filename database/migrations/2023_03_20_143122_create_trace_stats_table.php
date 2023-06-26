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
        Schema::create('trace_stats', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id')->nullable();
            $table->integer('subservice_id')->nullable();
            $table->string('source', 88)->nullable();
            $table->string('subsource', 88)->nullable();
            $table->string('log_type', 88)->nullable();
            $table->text('full_query')->nullable();
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
        Schema::dropIfExists('trace_stats');
    }
};
