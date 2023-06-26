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
        Schema::create('services_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('service', 88);
            $table->boolean('status');
            $table->integer('client_id');
            $table->string('callback_url')->nullable();
            $table->enum('callback_enable', ['1', '0']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_v2');
    }
};
