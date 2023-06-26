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
        Schema::connection('integration')->create('allterco_session_log', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('response_status', 88)->nullable();
            $table->string('response_sessionid', 124)->nullable();
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
        Schema::connection('integration')->dropIfExists('allterco_session_log');
    }
};
