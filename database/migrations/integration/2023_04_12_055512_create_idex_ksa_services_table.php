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
        Schema::connection('integration')->create('idex_ksa_services', function (Blueprint $table) {
            $table->integer('ID')->default(0);
            $table->integer('service_id');
            $table->integer('channel_id');
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
        Schema::connection('integration')->dropIfExists('idex_ksa_services');
    }
};
