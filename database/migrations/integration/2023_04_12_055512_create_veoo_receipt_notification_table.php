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
        Schema::connection('integration')->create('veoo_receipt_notification', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('msisdn');
            $table->integer('origin');
            $table->string('type', 88);
            $table->string('status', 124);
            $table->integer('statusCode');
            $table->string('statusText', 124);
            $table->integer('uuid');
            $table->timestamp('DateReceived')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_receipt_notification');
    }
};
