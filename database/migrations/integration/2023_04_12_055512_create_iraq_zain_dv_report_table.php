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
        Schema::connection('integration')->create('iraq_zain_dv_report', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('msisdn', 88)->nullable();
            $table->string('type', 88)->nullable();
            $table->string('operation_id', 288)->nullable();
            $table->string('event', 88)->nullable();
            $table->string('renewal', 288)->nullable();
            $table->string('status', 88)->nullable();
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
        Schema::connection('integration')->dropIfExists('iraq_zain_dv_report');
    }
};
