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
        Schema::connection('integration')->create('jordan_umniah_notifications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('mtid', 20);
            $table->string('source', 20);
            $table->string('msisdn', 20)->index('msisdn');
            $table->integer('subscriber_id');
            $table->string('status', 20);
            $table->dateTime('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('jordan_umniah_notifications');
    }
};
