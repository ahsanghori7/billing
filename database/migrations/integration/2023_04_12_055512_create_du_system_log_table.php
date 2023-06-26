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
        Schema::connection('integration')->create('du_system_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('LeadsID', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->text('Description')->nullable();
            $table->string('RequestUrl', 1500)->nullable();
            $table->string('url', 124);
            $table->string('type', 88)->nullable();
            $table->text('Data')->nullable();
            $table->string('method', 88);
            $table->text('response_description')->nullable();
            $table->string('response_status', 124)->nullable();
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_system_log');
    }
};
