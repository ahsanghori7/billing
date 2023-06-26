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
        Schema::connection('integration')->create('mediaworld_zain_iraq_callback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 88);
            $table->string('password', 88);
            $table->string('msisdn', 88);
            $table->string('action', 88);
            $table->integer('service_id');
            $table->integer('sp_id');
            $table->timestamp('date')->useCurrentOnUpdate()->useCurrent();
            $table->string('request_id', 88);
            $table->integer('shortcode');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mediaworld_zain_iraq_callback');
    }
};
