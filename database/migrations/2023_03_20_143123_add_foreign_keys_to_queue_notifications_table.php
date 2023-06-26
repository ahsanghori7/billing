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
        Schema::table('queue_notifications', function (Blueprint $table) {
            $table->foreign(['client_id'], 'queue_notifications_ibfk_1')->references(['ID'])->on('client_v2')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->foreign(['subservice_id'], 'queue_notifications_ibfk_2')->references(['ID'])->on('subservices_v2')->onUpdate('CASCADE')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('queue_notifications', function (Blueprint $table) {
            $table->dropForeign('queue_notifications_ibfk_1');
            $table->dropForeign('queue_notifications_ibfk_2');
        });
    }
};
