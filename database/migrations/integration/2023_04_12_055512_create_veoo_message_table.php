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
        Schema::connection('integration')->create('veoo_message', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Country', 88);
            $table->string('ShortCode', 55);
            $table->string('Message_Type', 88);
            $table->integer('credentialsID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_message');
    }
};
