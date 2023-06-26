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
        Schema::create('contentschedule', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Description', 88);
            $table->tinyInteger('Monday');
            $table->tinyInteger('Tuesday');
            $table->tinyInteger('Wednesday');
            $table->tinyInteger('Thursday');
            $table->tinyInteger('Friday');
            $table->tinyInteger('Saturday');
            $table->tinyInteger('Sunday');
            $table->tinyInteger('Enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentschedule');
    }
};
