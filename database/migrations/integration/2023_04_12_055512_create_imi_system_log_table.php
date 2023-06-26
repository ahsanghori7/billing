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
        Schema::connection('integration')->create('imi_system_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('LeadsID', 88)->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->text('Description')->nullable();
            $table->text('RequestUrl')->nullable();
            $table->text('url');
            $table->string('type', 88)->nullable();
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
        Schema::connection('integration')->dropIfExists('imi_system_log');
    }
};
