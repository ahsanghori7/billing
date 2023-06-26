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
        Schema::connection('integration')->create('mediaworld_zain_iraq', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('content_group');
            $table->integer('subservice_id');
            $table->integer('service_id');
            $table->integer('spid');
            $table->integer('shortcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mediaworld_zain_iraq');
    }
};
