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
        Schema::connection('integration')->create('du_callback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 88);
            $table->string('description', 124);
            $table->char('correlator', 22)->nullable();
            $table->string('msisdn', 88);
            $table->string('status', 18);
            $table->integer('opId');
            $table->integer('responseStatusCode');
            $table->string('responseStatusdescription', 88);
            $table->string('serviceId', 18)->nullable();
            $table->string('productId', 18);
            $table->string('clubId', 18);
            $table->string('subid', 18)->nullable();
            $table->string('subStatus', 12)->nullable();
            $table->text('FullResponse');
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
        Schema::connection('integration')->dropIfExists('du_callback');
    }
};
