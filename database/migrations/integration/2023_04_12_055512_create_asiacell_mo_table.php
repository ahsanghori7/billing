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
        Schema::connection('integration')->create('asiacell_mo', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('msisdn', 20);
            $table->text('keyword');
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
        Schema::connection('integration')->dropIfExists('asiacell_mo');
    }
};
