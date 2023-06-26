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
        Schema::connection('integration')->create('du_billing_system_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('leads_id', 88)->nullable();
            $table->integer('subscriber_id')->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->integer('partner_role_id')->nullable();
            $table->string('password')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('price_point_id')->nullable();
            $table->integer('operator_id')->nullable();
            $table->string('ext_tx_id')->nullable();
            $table->text('response')->nullable();
            $table->string('request_url', 1500)->nullable();
            $table->string('url', 124);
            $table->string('type', 88)->nullable();
            $table->text('data')->nullable();
            $table->string('method', 88);
            $table->text('response_description')->nullable();
            $table->string('response_status', 124)->nullable();
            $table->string('transaction_id', 25)->nullable();
            $table->integer('is_billed')->nullable()->default(0);
            $table->integer('billing_level')->nullable();
            $table->float('billing_amount', 10, 0)->nullable();
            $table->integer('validity')->nullable();
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_billing_system_log');
    }
};
