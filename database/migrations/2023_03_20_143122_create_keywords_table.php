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
        Schema::create('keywords_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('keyword', 88);
            $table->integer('shortcode');
            $table->integer('subservices_id')->nullable();
            $table->string('action', 88);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keywords_v2');
    }
};
