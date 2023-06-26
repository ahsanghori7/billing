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
        Schema::create('stats', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->date('Date');
            $table->integer('Subservice_ID');
            $table->string('Source_ID', 123);
            $table->string('Subsource_ID', 123);
            $table->integer('CurrentActive')->default(0);
            $table->integer('PinSent')->default(0);
            $table->integer('DuplicatePinSent')->default(0);
            $table->integer('NewUsers')->default(0);
            $table->integer('InstantCharged')->default(0);
            $table->integer('NewChargedUsers')->default(0);
            $table->integer('NewUnsubs')->default(0);
            $table->integer('Unsubscribers')->default(0);
            $table->integer('Sent')->default(0);
            $table->integer('Delivered')->default(0);
            $table->integer('Failed')->default(0);
            $table->string('Week', 88)->default('0');
            $table->string('Month', 88)->default('0');
            $table->integer('Year')->default(0);

            $table->unique(['Date', 'Subservice_ID', 'Source_ID', 'Subsource_ID'], 'Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
