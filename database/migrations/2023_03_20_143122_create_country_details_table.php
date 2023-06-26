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
        Schema::create('country_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('country_name', 88);
            $table->integer('consent_url')->nullable();
            $table->integer('operator_id');
            $table->integer('service_id');
            $table->integer('subservice_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_details');
    }
};
