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
        Schema::connection('integration')->create('du_billing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subservice_id');
            $table->string('amount', 12);
            $table->integer('user_charged')->nullable()->default(0);
            $table->string('normal_price', 24)->nullable()->default('0');
            $table->integer('fallback_charged')->nullable()->default(0);
            $table->string('fallback_price', 24)->nullable()->default('0');
            $table->date('Date')->nullable();

            $table->unique(['subservice_id', 'Date'], 'DuStats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_billing');
    }
};
