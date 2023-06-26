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
        Schema::create('queue_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Request_URL', 124);
            $table->text('Body');
            $table->string('message', 124);
            $table->string('msisdn', 88);
            $table->string('shortcode', 12);
            $table->string('messageid', 88);
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
        Schema::dropIfExists('queue_log');
    }
};
