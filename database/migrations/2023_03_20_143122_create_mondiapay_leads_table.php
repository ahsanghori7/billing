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
        Schema::create('mondiapay_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_id')->nullable();
            $table->integer('subscriber_id')->nullable();
            $table->string('msisdn', 16)->nullable()->default('');
            $table->string('code', 64)->nullable()->default('');
            $table->string('uuid', 64)->nullable()->default('');
            $table->integer('status')->nullable()->default(0);
            $table->boolean('lead_status')->nullable()->default(false);
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
        Schema::dropIfExists('mondiapay_leads');
    }
};
