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
        Schema::create('track_insert_susbcriber', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('leadid')->nullable();
            $table->integer('subservice_id')->nullable();
            $table->string('subservice', 50)->nullable();
            $table->boolean('stats')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_insert_susbcriber');
    }
};
