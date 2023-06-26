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
        Schema::create('shortcodes_stats', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('shortcode')->nullable();
            $table->integer('Operator_ID')->nullable();
            $table->integer('service');
            $table->integer('subservice');
            $table->integer('billing_count')->default(0);
            $table->date('Date');

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
        Schema::dropIfExists('shortcodes_stats');
    }
};
