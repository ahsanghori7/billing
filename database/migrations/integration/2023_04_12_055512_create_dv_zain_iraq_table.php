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
        Schema::connection('integration')->create('dv_zain_iraq', function (Blueprint $table) {
            $table->increments('id');
            $table->string('msisdn', 20)->nullable();
            $table->text('success_url')->nullable();
            $table->text('error_url')->nullable();
            $table->text('encrypt')->nullable();
            $table->text('final_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('dv_zain_iraq');
    }
};
