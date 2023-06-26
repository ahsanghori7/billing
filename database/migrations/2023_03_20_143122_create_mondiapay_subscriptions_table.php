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
        Schema::create('mondiapay_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mp_config_id');
            $table->unsignedInteger('subservice_id');
            $table->integer('daily_service_id')->default(0);
            $table->integer('weekly_service_id')->default(0);
            $table->integer('monthly_service_id')->default(0);
            $table->string('daily_unsub_keyword', 32)->default('');
            $table->string('weekly_unsub_keyword', 32)->default('');
            $table->string('monthly_unsub_keyword', 32)->default('');
            $table->integer('short_code')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mondiapay_subscriptions');
    }
};
