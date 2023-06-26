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
        Schema::connection('integration')->table('idex_callback', function (Blueprint $table) {
            $table->foreign(['lead_id'], 'leads')->references(['ID'])->on('leads')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['subscriber_id'], 'subscribers')->references(['ID'])->on('subscribers')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->table('idex_callback', function (Blueprint $table) {
            $table->dropForeign('leads');
            $table->dropForeign('subscribers');
        });
    }
};
