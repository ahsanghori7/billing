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
        Schema::connection('integration')->create('vl_errors', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('Code');
            $table->text('Description');
            $table->string('API', 88);
            $table->text('Scenario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('vl_errors');
    }
};
