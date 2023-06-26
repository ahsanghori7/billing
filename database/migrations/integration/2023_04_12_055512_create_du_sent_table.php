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
        Schema::connection('integration')->create('du_sent', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subservice_id')->nullable();
            $table->string('message', 500);
            $table->string('mtid', 20)->nullable()->index('mtid');
            $table->string('source', 20)->index('source');
            $table->string('msisdn', 20)->index('msisdn');
            $table->string('status', 20);
            $table->integer('UserID')->nullable()->index('UserID');
            $table->string('Response', 50)->nullable();
            $table->string('Type', 124)->nullable();
            $table->string('ProductId', 88);
            $table->string('PartnerRoleId', 88);
            $table->string('PricePointId', 18);
            $table->dateTime('Date')->useCurrent()->index('Date');

            $table->index(['UserID'], 'UserID_3');
            $table->index(['UserID'], 'UserID_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_sent');
    }
};
