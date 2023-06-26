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
        Schema::connection('integration')->create('jordan_operator_id', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('operator_id');
            $table->integer('channel_id');
            $table->integer('billing_op_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('jordan_operator_id');
    }
};
