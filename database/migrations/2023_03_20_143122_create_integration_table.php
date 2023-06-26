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
        Schema::create('integration_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('Provider_id');
            $table->string('integration_file', 88);
            $table->string('subscribe_url', 124)->nullable();
            $table->string('send_pin_url', 124)->nullable()->index('send_pin_url');
            $table->string('resend_pin_url', 124)->nullable();
            $table->string('verify_pin_url', 124)->nullable();
            $table->string('unsubscribe_url', 124)->nullable();
            $table->string('send_free_mt_url', 124)->nullable()->index('send_free_mt_url');
            $table->string('send_mt_url', 124)->nullable()->index('send_mt_url');
            $table->string('billing_url')->nullable();
            $table->string('wrong_mo_url', 124)->nullable();
            $table->boolean('enable_subscription')->default(true);
            $table->boolean('enable_free_content')->default(true);
            $table->boolean('enable_content')->default(true);
            $table->integer('message_encoded');
            $table->tinyInteger('verification')->nullable()->default(0);
            $table->string('system_log', 88)->nullable()->index('system_log');
            $table->boolean('unique_by_sc')->default(false);
            $table->boolean('status')->default(true);
            $table->boolean('billing_enabled')->nullable()->default(false);
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
        Schema::dropIfExists('integration_v2');
    }
};
