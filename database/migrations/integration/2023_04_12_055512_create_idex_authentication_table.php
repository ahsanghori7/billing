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
        Schema::connection('integration')->create('idex_authentication', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ClientReference', 20);
            $table->integer('Ad_Id');
            $table->integer('Sub_Ad_Id')->nullable();
            $table->integer('operator_id')->nullable();
            $table->integer('service_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('idex_authentication');
    }
};
