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
        Schema::create('operators_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('country_id');
            $table->integer('operators_code');
            $table->string('operators_name', 88);
            $table->integer('provider_id');
            $table->integer('subservice_id')->nullable();
            $table->timestamp('content_start_time')->useCurrent();
            $table->timestamp('content_end_time')->useCurrent();
            $table->boolean('status')->default(true);
            $table->boolean('subscription_enabled')->nullable()->default(true);
            $table->string('additional_mccmnc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operators_v2');
    }
};
