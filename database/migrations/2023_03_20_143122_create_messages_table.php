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
        Schema::create('messages', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('message_ID', 88);
            $table->integer('subscriber_ID');
            $table->integer('subservices_ID');
            $table->string('Shortcode', 24);
            $table->integer('tip_ID');
            $table->string('ReturnMessageID', 88)->nullable();
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
