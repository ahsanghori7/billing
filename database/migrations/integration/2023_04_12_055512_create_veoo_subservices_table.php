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
        Schema::connection('integration')->create('veoo_subservices', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('services_id', 88);
            $table->integer('NetworkID')->index('NetworkID');
            $table->integer('ByLebSubserviceID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_subservices');
    }
};
