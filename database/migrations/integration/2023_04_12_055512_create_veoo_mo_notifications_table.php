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
        Schema::connection('integration')->create('veoo_mo_notifications', function (Blueprint $table) {
            $table->integer('UniqueID', true);
            $table->string('id', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->string('shortcode', 88)->nullable();
            $table->string('keyword', 88)->nullable();
            $table->string('network', 88)->nullable();
            $table->string('message', 88)->nullable();
            $table->string('service_id', 88)->nullable();
            $table->timestamp('timestamp')->useCurrent();
            $table->timestamp('Date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_mo_notifications');
    }
};
