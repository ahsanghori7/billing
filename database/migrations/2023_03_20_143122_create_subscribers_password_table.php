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
        Schema::create('subscribers_password', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscriber_id')->unique('subscriber_id');
            $table->string('password', 88);
            $table->integer('country_id');
            $table->string('hashed_password', 224);
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
        Schema::dropIfExists('subscribers_password');
    }
};
