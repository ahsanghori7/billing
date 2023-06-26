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
        Schema::connection('integration')->create('viva_bahrain_billing_old', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('price_point_id', 24);
            $table->integer('subscriber_charged');
            $table->string('billing', 24);
            $table->date('date');

            $table->unique(['price_point_id', 'date'], 'price_point_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('viva_bahrain_billing_old');
    }
};
