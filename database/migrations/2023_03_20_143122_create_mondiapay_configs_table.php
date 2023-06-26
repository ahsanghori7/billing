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
        Schema::create('mondiapay_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('operator_id')->default(0);
            $table->unsignedInteger('country_id')->default(0);
            $table->string('client_id', 191)->nullable();
            $table->string('client_secret', 191)->nullable();
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
        Schema::dropIfExists('mondiapay_configs');
    }
};
