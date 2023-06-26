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
        Schema::connection('integration')->create('asiacell_notifications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('mtid', 20)->nullable();
            $table->string('source', 20);
            $table->string('msisdn', 20)->index('msisdn');
            $table->string('status', 20);
            $table->dateTime('Date')->useCurrent();
            $table->boolean('free')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_notifications');
    }
};
