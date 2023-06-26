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
        Schema::create('subservices_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('subservice_name', 100);
            $table->integer('operators_id');
            $table->integer('country_id');
            $table->integer('service_id');
            $table->string('shortcode', 18)->nullable();
            $table->integer('pincode_length');
            $table->text('success_url');
            $table->text('failed_url');
            $table->text('notify_url');
            $table->string('callback_url')->nullable();
            $table->integer('pinenabled');
            $table->string('content_schedule', 88);
            $table->integer('free_content_schedule')->nullable();
            $table->integer('integration_id')->nullable()->index('integration_id');
            $table->integer('looping_content');
            $table->integer('welcome_enabled');
            $table->integer('instant_content');
            $table->integer('pin_style_id')->default(1);
            $table->string('free_shortcode', 25);
            $table->integer('status');
            $table->timestamp('content_starttime')->nullable()->useCurrent();
            $table->dateTime('timestamp')->default('2099-12-31 23:59:59');
            $table->integer('free_trial')->default(0);
            $table->boolean('is_consent')->default(false);
            $table->boolean('has_content')->nullable()->default(true);
            $table->boolean('is_blocked')->nullable()->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subservices_v2');
    }
};
