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
        Schema::create('tips_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('text', 124)->index('text');
            $table->string('type', 88)->nullable()->index('Type');
            $table->integer('ordering');
            $table->integer('status');
            $table->timestamp('date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
};
