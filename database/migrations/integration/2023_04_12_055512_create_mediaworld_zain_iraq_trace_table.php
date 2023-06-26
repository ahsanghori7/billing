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
        Schema::connection('integration')->create('mediaworld_zain_iraq_trace', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('event', ['pin request', 'verify']);
            $table->string('msisdn', 88)->nullable();
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mediaworld_zain_iraq_trace');
    }
};
