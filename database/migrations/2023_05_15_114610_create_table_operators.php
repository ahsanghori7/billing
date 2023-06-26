<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operators_v2', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->integer('operator_code');
            $table->string('operator_name', 88);
            $table->integer('provider_id');
            $table->integer('subservice_id')->nullable();
            $table->timestamp('content_start_time')->useCurrent()->nullable();
            $table->timestamp('content_end_time')->useCurrent()->nullable();
            $table->boolean('status')->nullable();
            $table->tinyInteger('subscription_enabled')->nullable();
            $table->string('additional_mccmnc')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators_v2');
    }
};
