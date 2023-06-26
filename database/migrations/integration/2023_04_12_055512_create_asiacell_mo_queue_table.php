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
        Schema::connection('integration')->create('asiacell_mo_queue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('msisdn', 20)->nullable();
            $table->string('message', 140)->nullable();
            $table->string('shortcode', 10)->nullable();
            $table->string('encoding', 1)->nullable();
            $table->string('trimmed', 140)->nullable();
            $table->boolean('processing')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_mo_queue');
    }
};
