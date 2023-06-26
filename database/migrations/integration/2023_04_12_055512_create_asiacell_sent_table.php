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
        Schema::connection('integration')->create('asiacell_sent', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('message');
            $table->string('mtid', 20)->nullable()->index('mtid');
            $table->string('source', 20)->index('source');
            $table->string('msisdn', 20)->index('msisdn');
            $table->string('status', 20);
            $table->dateTime('Date')->useCurrent()->index('Date');
            $table->integer('UserID')->nullable()->index('UserID');
            $table->string('Response', 50)->nullable();
            $table->string('Type', 10)->nullable();
            $table->string('port', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_sent');
    }
};
