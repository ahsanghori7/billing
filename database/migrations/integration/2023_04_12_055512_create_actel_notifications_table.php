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
        Schema::connection('integration')->create('actel_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_id')->nullable();
            $table->integer('subscriber_id')->nullable();
            $table->integer('id_client')->nullable();
            $table->integer('id_application')->nullable();
            $table->string('country', 16)->nullable();
            $table->string('operator', 16)->nullable();
            $table->integer('opid')->nullable();
            $table->string('msisdn', 16)->nullable();
            $table->string('billedshortcode', 16)->nullable();
            $table->string('freeshortcode', 16)->nullable();
            $table->string('smsid', 40)->nullable();
            $table->string('action', 16)->nullable();
            $table->string('type', 16)->nullable();
            $table->string('status', 16)->nullable();
            $table->string('description', 191)->nullable();
            $table->decimal('rate')->nullable();
            $table->string('currency', 16)->nullable();
            $table->string('lang', 16)->nullable();
            $table->string('dlrdate', 24)->nullable();
            $table->string('flow', 16)->nullable();
            $table->string('traffic_source', 32)->nullable();
            $table->string('clickid', 16)->nullable();
            $table->boolean('hasfreetrial')->nullable();
            $table->tinyInteger('id_billing_request_type')->nullable();
            $table->string('smstext', 191)->nullable();
            $table->text('full_response')->nullable();
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
        Schema::connection('integration')->dropIfExists('actel_notifications');
    }
};
