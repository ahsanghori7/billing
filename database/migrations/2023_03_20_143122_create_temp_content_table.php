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
        Schema::create('temp_content', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('ContentGroup', 88);
            $table->integer('Cseq');
            $table->integer('subService_ID');
            $table->string('TipsText', 88);
            $table->string('TipsType', 88)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_content');
    }
};
