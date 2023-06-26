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
        Schema::create('define_operator_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('ported', 24)->nullable();
            $table->char('errcode', 18)->nullable();
            $table->char('country', 24)->nullable();
            $table->char('mcc', 5)->nullable();
            $table->char('mnc', 5)->nullable();
            $table->string('msgid', 124)->nullable();
            $table->string('to', 18)->nullable();
            $table->string('imsi', 124)->nullable();
            $table->text('operator')->nullable();
            $table->dateTime('date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('define_operator_v2');
    }
};
