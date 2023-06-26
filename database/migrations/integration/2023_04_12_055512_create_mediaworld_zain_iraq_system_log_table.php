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
        Schema::connection('integration')->create('mediaworld_zain_iraq_system_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('LeadsID')->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->text('Description')->nullable();
            $table->string('RequestUrl', 1500)->nullable();
            $table->string('url', 124)->nullable();
            $table->string('type', 88)->nullable();
            $table->text('Data')->nullable();
            $table->string('method', 88)->nullable();
            $table->string('response_status', 88)->nullable();
            $table->text('response_description')->nullable();
            $table->timestamp('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mediaworld_zain_iraq_system_log');
    }
};
