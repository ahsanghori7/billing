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
        Schema::connection('integration')->create('du_invalid_keyword', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('subservice_name', 88);
            $table->string('keyword', 88);
            $table->integer('billing_sid');
            $table->integer('shortocde');
            $table->text('invalid_sub');
            $table->text('invalid_unsub');
            $table->string('cost', 124);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_invalid_keyword');
    }
};
