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
        Schema::connection('integration')->create('generated_operators', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('OperatorsID');
            $table->integer('ProviderID');
            $table->string('GeneratedOperators', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('generated_operators');
    }
};
