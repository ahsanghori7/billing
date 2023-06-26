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
        Schema::connection('integration')->create('vl_operators', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('vl_operator_name', 88);
            $table->integer('ByLeb_operatorID');
            $table->integer('vl_operatorID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('vl_operators');
    }
};
