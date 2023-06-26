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
        Schema::connection('integration')->create('du_mo', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subservice_id')->nullable();
            $table->string('msisdn', 20);
            $table->string('keyword', 100);
            $table->string('sc', 10)->index('sc');
            $table->string('encoding', 3);
            $table->string('decoded', 100)->nullable();
            $table->dateTime('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_mo');
    }
};
