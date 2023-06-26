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
        Schema::create('redirection_token', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->integer('lead_id');
            $table->string('token', 224);
            $table->tinyInteger('used')->default(0);
            $table->text('landing')->nullable();
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
        Schema::dropIfExists('redirection_token');
    }
};
