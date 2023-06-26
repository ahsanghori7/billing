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
        Schema::connection('integration')->create('asiacell_failed_mt', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('message')->nullable();
            $table->string('mtid', 20)->nullable()->index('mtid');
            $table->string('source', 20)->nullable()->index('source');
            $table->string('msisdn', 20)->nullable()->index('msisdn');
            $table->string('status', 20)->nullable();
            $table->dateTime('Date')->useCurrent()->index('Date');
            $table->integer('UserID')->nullable()->index('UserID');
            $table->string('Response', 250)->nullable();
            $table->string('Type', 10)->nullable();
            $table->string('port', 5)->nullable();
            $table->string('encoding', 50)->nullable();
            $table->boolean('is_send')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_failed_mt');
    }
};
