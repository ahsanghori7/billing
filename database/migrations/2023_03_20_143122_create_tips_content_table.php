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
        Schema::create('tips_content_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('content_folders_ID')->index('content_folders_ID');
            $table->integer('content_group_ID')->index('content_group_ID');
            $table->integer('tips_ID')->index('tips_ID');
            $table->integer('status');

            $table->unique(['tips_ID', 'content_group_ID', 'content_folders_ID'], 'unique_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips_content');
    }
};
