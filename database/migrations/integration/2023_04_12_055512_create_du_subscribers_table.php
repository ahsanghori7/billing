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
        Schema::connection('integration')->create('du_subscribers', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('subscriberID');
            $table->string('msisdn', 88);
            $table->char('product_id', 18);
            $table->char('op_id', 24);
            $table->integer('requestStatusCode');
            $table->string('requestStatusDesc', 124);
            $table->text('mbSubApiResponseTO')->nullable();
            $table->integer('opID');
            $table->string('responseStatusCode', 18);
            $table->string('responseStatusdescription', 88);
            $table->string('serviceId', 18);
            $table->string('productId', 18);
            $table->string('clubId', 18);
            $table->string('subid', 88);
            $table->string('subStatus', 24);
            $table->text('FullResponse');
            $table->timestamp('Date')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_subscribers');
    }
};
