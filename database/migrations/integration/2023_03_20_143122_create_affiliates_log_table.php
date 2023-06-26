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
        Schema::connection('integration')->create('affiliates_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('affiliate_id')->nullable();
            $table->integer('lead_id')->nullable();
            $table->text('request_json')->nullable();
            $table->text('response_json')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->boolean('callback_sent')->nullable()->default(false);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('affiliates_log');
    }
};
