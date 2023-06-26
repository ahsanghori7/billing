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
        Schema::create('content_folders_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('title');
            $table->integer('tipsNum');
            $table->integer('display_order');
            $table->integer('status');
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
        Schema::dropIfExists('content_folders_v2');
    }
};
