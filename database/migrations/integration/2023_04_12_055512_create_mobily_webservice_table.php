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
        Schema::connection('integration')->create('mobily_webservice', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('date')->useCurrent();
            $table->string('product_id', 15)->nullable();
            $table->string('service_id', 25)->nullable();
            $table->integer('update_type')->nullable();
            $table->string('user_id', 25)->nullable();
            $table->boolean('is_fake_user')->nullable();
            $table->string('update_time', 25)->nullable();
            $table->string('update_desc', 15)->nullable();
            $table->string('effective_time', 25)->nullable();
            $table->string('expiry_time', 25)->nullable();
            $table->integer('charge_mode')->nullable();
            $table->integer('sub_exp_mode')->nullable();
            $table->integer('object_type')->nullable();
            $table->string('shortcode', 15)->nullable();
            $table->boolean('is_free_period')->nullable();
            $table->integer('pay_type')->nullable();
            $table->string('transaction_id', 25)->nullable();
            $table->string('order_key', 35)->nullable();
            $table->integer('grace_period')->nullable();
            $table->integer('service_availability')->nullable();
            $table->integer('service_pay_type')->nullable();
            $table->float('fee', 10, 0)->nullable();
            $table->string('cycle_end_time', 25)->nullable();
            $table->string('start_time', 25)->nullable();
            $table->integer('channel_id')->nullable();
            $table->string('trace_unique_id', 60)->nullable();
            $table->boolean('rent_success')->nullable();
            $table->boolean('try')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mobily_webservice');
    }
};
