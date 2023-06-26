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
        Schema::table('subservices_v2', function (Blueprint $table) {
            $table->foreign(['integration_id'], 'subservices_ibfk_1')->references(['id'])->on('integration_v2')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subservices_v2', function (Blueprint $table) {
            $table->dropForeign('subservices_ibfk_1');
        });
    }
};
