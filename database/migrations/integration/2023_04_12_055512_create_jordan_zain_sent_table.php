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
        Schema::connection('integration')->create('jordan_zain_sent', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('message', 500);
            $table->string('mtid', 30)->nullable()->index('mtid');
            $table->string('source', 20);
            $table->string('msisdn', 20);
            $table->string('status', 20);
            $table->dateTime('Date')->useCurrent();
            $table->integer('UserID')->nullable();
            $table->string('Response', 50)->nullable();
            $table->text('full_request');
            $table->text('full_response');
            $table->string('Type', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('jordan_zain_sent');
    }
};
