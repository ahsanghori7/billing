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
        Schema::create('shortcodes_stats_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('shortcode')->nullable();
            $table->integer('operator_id')->nullable();
            $table->integer('service');
            $table->integer('subservice');
            $table->integer('billing_count')->default(0);
            $table->date('date');

            $table->unique(['shortcode', 'operator_id', 'service', 'subservice', 'date'], 'shortcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortcodes_stats_v2');
    }
};
