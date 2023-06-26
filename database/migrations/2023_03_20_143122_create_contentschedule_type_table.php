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
        Schema::create('contentschedule_type', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subservice_id');
            $table->integer('content_schedule_id');
            $table->tinyInteger('Monday_Free')->nullable();
            $table->tinyInteger('Tuesday_Free')->nullable();
            $table->tinyInteger('Wednesday_Free')->nullable();
            $table->tinyInteger('Thursday_Free')->nullable();
            $table->tinyInteger('Friday_Free')->nullable();
            $table->tinyInteger('Saturday_Free')->nullable();
            $table->tinyInteger('Sunday_Free')->nullable();
            $table->integer('NoOfDays')->nullable();
            $table->tinyInteger('Enabled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentschedule_type');
    }
};
