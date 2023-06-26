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
        Schema::connection('integration')->create('mondiapay_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 191)->nullable();
            $table->string('purchase_token', 191)->nullable();
            $table->string('subscription_id', 191)->nullable();
            $table->string('subscription_type_id', 191)->nullable();
            $table->string('event', 32)->nullable();
            $table->string('reason', 64)->nullable();
            $table->string('status', 32)->nullable();
            $table->string('sub_status', 32)->nullable();
            $table->string('start_date', 32)->nullable();
            $table->string('end_date', 32)->nullable();
            $table->string('price_amount', 32)->nullable();
            $table->string('price_currency', 32)->nullable();
            $table->string('trial_end_date', 32)->nullable();
            $table->string('tagged_for_cancellation', 32)->nullable();
            $table->string('event_date_time', 32)->nullable();
            $table->string('event_uuid', 191)->nullable();
            $table->text('full_response')->nullable();
            $table->integer('lead_id')->nullable()->default(0);
            $table->integer('subscriber_id')->nullable()->default(0);
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
        Schema::connection('integration')->dropIfExists('mondiapay_notifications');
    }
};
