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
        Schema::connection('integration')->create('asiacell_double_logs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('msisdn', 20);
            $table->string('shortcode', 10);
            $table->boolean('used')->default(false);
            $table->dateTime('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_double_logs');
    }
};
