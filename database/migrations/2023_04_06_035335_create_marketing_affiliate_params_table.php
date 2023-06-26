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
        Schema::create('marketing_affiliate_params', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id')->nullable($value = true);
            $table->integer('affiliate_id');
            $table->string('key', 255);
            $table->string('value', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing_affiliate_params');
    }
};
