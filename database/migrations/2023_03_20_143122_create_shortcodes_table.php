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
        Schema::create('shortcodes_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('shortcode')->nullable();
            $table->string('free_shortcode', 24);
            $table->integer('operator_id');
            $table->integer('integration_id')->nullable();

            $table->unique(['shortcode', 'free_shortcode', 'operator_id', 'integration_id'], 'shortcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortcodes_v2');
    }
};
