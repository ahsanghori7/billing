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
        Schema::create('contentfolder_subservices_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subservices_id')->index('subservices_id_2');
            $table->integer('content_folders_id')->index('content_folders_id');
            $table->integer('content_group_id')->index('content_group_id');
            $table->integer('order_display');
            $table->integer('status');

            $table->unique(['subservices_id', 'content_folders_id', 'content_group_id', 'order_display'], 'subservices_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentfolder_subservices_v2');
    }
};
