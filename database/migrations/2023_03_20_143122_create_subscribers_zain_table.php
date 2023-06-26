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
        Schema::create('subscribers_zain_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('status');
            $table->string('msisdn', 88)->index('msisdn');
            $table->integer('cuntry_id');
            $table->integer('operators_id');
            $table->integer('shortcode')->nullable();
            $table->string('free_shortcode', 15)->nullable();
            $table->integer('service_id');
            $table->integer('subService_id')->index('subService_id');
            $table->integer('contentGroup');
            $table->string('pin', 18)->nullable()->index('pin');
            $table->integer('cseq')->index('CSeq');
            $table->dateTime('subdate');
            $table->string('delivery_state', 88)->nullable();
            $table->integer('content_folders_id')->nullable();
            $table->string('source', 88)->index('source');
            $table->string('subsource', 88)->index('subsource');
            $table->string('next_content', 88)->nullable();
            $table->integer('success_billing')->nullable()->default(0);
            $table->integer('bill_attempts')->nullable()->default(0);
            $table->string('ip', 88);
            $table->string('minisite', 124);
            $table->string('lastSuccBill', 88)->nullable();
            $table->integer('integration_id')->nullable()->index('Integration');
            $table->string('firstBilling', 88)->nullable();
            $table->string('last_delivery', 88)->nullable();
            $table->timestamp('next_billing')->nullable();
            $table->string('next_retry', 88)->nullable();
            $table->integer('leads_id')->index('Leads_id');
            $table->text('info')->nullable();
            $table->integer('retries')->nullable();
            $table->tinyInteger('used')->nullable()->default(0);
            $table->boolean('processing_message')->default(false);
            $table->boolean('subs_lock')->default(false);
            $table->boolean('is_free')->default(false);
            $table->integer('count_sent')->default(0);
            $table->boolean('validity')->default(false);
            $table->boolean('is_billed')->default(false);

            $table->index(['integration_id'], 'integration_id');
            $table->unique(['msisdn', 'service_id', 'subService_id', 'shortcode'], 'msisdn_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers_zain');
    }
};
