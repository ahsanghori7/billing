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
        Schema::create('users_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 88);
            $table->char('password', 124);
            $table->integer('privilege');
            $table->integer('billing_type_id')->nullable();
            $table->integer('identifier')->nullable();
            $table->string('email', 124)->nullable();
            $table->string('profile', 124)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
