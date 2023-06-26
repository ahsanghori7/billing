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
        Schema::connection('integration')->table('veoo_subservices', function (Blueprint $table) {
            $table->foreign(['NetworkID'], 'veoo_subservices_ibfk_1')->references(['ID'])->on('veoo_network')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->table('veoo_subservices', function (Blueprint $table) {
            $table->dropForeign('veoo_subservices_ibfk_1');
        });
    }
};
