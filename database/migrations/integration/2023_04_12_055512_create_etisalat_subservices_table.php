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
        Schema::connection('integration')->create('etisalat_subservices', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subserviceID');
            $table->integer('packageID');
            $table->integer('price');
            $table->string('sender_id', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('etisalat_subservices');
    }
};
