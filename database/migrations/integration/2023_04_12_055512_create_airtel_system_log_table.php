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
        Schema::connection('integration')->create('airtel_system_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('LeadsID')->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->text('Description')->nullable();
            $table->string('RequestUrl', 1500)->nullable();
            $table->string('url', 124)->nullable();
            $table->string('type', 88);
            $table->text('Data')->nullable();
            $table->string('method', 88);
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
        Schema::connection('integration')->dropIfExists('airtel_system_log');
    }
};
