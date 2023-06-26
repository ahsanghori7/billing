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
        Schema::connection('integration')->create('asiacell_temp_mt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('msisdn', 13)->nullable();
            $table->string('mtid', 14)->nullable();
            $table->string('source', 4)->nullable();
            $table->dateTime('date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_temp_mt');
    }
};
