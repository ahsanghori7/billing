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
        Schema::create('exitmessages_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('text');
            $table->integer('subservice_id');
            $table->string('shortcode', 9);
            $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exitmessages_v2');
    }
};
