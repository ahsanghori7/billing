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
        Schema::connection('integration')->create('asiacell_process_config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('file_reference', 250)->nullable();
            $table->string('key', 250)->nullable();
            $table->string('value', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_process_config');
    }
};
