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
        Schema::create('subscribers_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('status');
            $table->string('msisdn', 88)->index('msisdn');
            $table->integer('country_id');
            $table->integer('operators_id')->nullable()->index('operators_id');
            $table->integer('shortcode')->nullable();
            $table->string('free_shortcode', 15)->nullable();
            $table->integer('service_id');
            $table->integer('subService_id')->index('subService_id');
            $table->integer('contentGroup');
            $table->string('pin', 18)->nullable()->index('pin');
            $table->integer('cseq')->index('CSeq');
            $table->dateTime('Subdate')->useCurrent();
            $table->string('deliveryState', 88)->nullable();
            $table->integer('content_folders_id')->nullable();
            $table->string('source', 88)->nullable()->default('Atlas')->index('source');
            $table->string('subsource', 88)->nullable()->default('Atlas')->index('subsource_2');
            $table->string('next_content', 88)->nullable();
            $table->integer('success_billing')->nullable()->default(0);
            $table->integer('bill_attempts')->nullable()->default(0);
            $table->string('ip', 88);
            $table->string('minisite', 124);
            $table->string('lastSuccBill', 88)->nullable();
            $table->integer('integration_id')->nullable()->index('integration_id');
            $table->string('first_billing', 88)->nullable();
            $table->string('last_delivery', 88)->nullable();
            $table->timestamp('next_billing')->nullable();
            $table->string('next_retry', 88)->nullable();
            $table->integer('leads_id')->index('leads_id');
            $table->text('info')->nullable();
            $table->integer('retries')->nullable();
            $table->tinyInteger('used')->nullable()->default(0);
            $table->boolean('processing_message')->default(false);
            $table->boolean('subs_lock')->default(false);
            $table->boolean('is_free')->default(false);
            $table->tinyInteger('free_counter');
            $table->integer('count_sent')->default(0);
            $table->boolean('Validity')->unsigned()->default(false);
            $table->boolean('is_billed')->default(false);
            $table->integer('billing_level')->nullable()->default(1);
            $table->boolean('is_trial')->nullable();

            $table->unique(['msisdn', 'service_id', 'subService_id', 'shortcode'], 'msisdn_2');
            $table->index(['subsource'], 'subsource');
            $table->index(['source'], 'source_2');
            $table->index(['integration_id'], 'integration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers_v2');
    }
};
