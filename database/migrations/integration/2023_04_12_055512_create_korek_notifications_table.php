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
        Schema::connection('integration')->create('korek_notifications', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('mtid', 88);
            $table->boolean('status');
            $table->string('msisdn', 15);
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
        Schema::connection('integration')->dropIfExists('korek_notifications');
    }
};
