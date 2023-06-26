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
        Schema::connection('integration')->create('ooredoo_kuwait_kw', function (Blueprint $table) {
            $table->integer('ServiceID');
            $table->string('Keyword', 11);
            $table->string('Action', 10)->default('Sub');

            $table->unique(['ServiceID', 'Keyword'], 'ServiceID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_kuwait_kw');
    }
};
