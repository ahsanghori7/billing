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
        Schema::table('subscribers_v2', function (Blueprint $table) {
            $table->foreign(['integration_id'], 'integration_fk_new')->references(['id'])->on('integration_v2')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['operators_id'], 'operator_id_new')->references(['id'])->on('operators_v2')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscribers_v2', function (Blueprint $table) {
            $table->dropForeign('integration_fk_new');
            $table->dropForeign('operator_id_new');
        });
    }
};
