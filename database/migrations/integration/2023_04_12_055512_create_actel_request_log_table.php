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
        Schema::connection('integration')->create('actel_request_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('request_type', 30)->nullable();
            $table->string('url')->nullable();
            $table->integer('lead_id')->nullable();
            $table->string('api_msisdn', 25)->nullable();
            $table->integer('api_appid')->nullable();
            $table->integer('api_opid')->nullable();
            $table->string('api_reqid')->nullable();
            $table->integer('api_langid')->nullable();
            $table->string('api_sig')->nullable();
            $table->string('api_key')->nullable();
            $table->string('api_clickid', 10)->nullable();
            $table->string('api_trafficsource', 50)->nullable();
            $table->string('api_buychannel', 10)->nullable();
            $table->string('api_pincode', 10)->nullable();
            $table->string('api_rate', 5)->nullable();
            $table->text('request_json')->nullable();
            $table->text('response_json')->nullable();
            $table->string('error_code', 5)->nullable();
            $table->string('error_description')->nullable();
            $table->dateTime('date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('actel_request_log');
    }
};
