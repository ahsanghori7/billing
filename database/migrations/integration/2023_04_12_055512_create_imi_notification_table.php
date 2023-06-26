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
        Schema::connection('integration')->create('imi_notification', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->string('transid', 20);
            $table->string('sid', 6);
            $table->string('status', 15);
            $table->boolean('statusCode')->nullable();
            $table->string('action', 10);
            $table->timestamp('nextRenewalDate')->nullable();
            $table->timestamp('transDate')->default(null);
            $table->string('channel', 10);
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('imi_notification');
    }
};
