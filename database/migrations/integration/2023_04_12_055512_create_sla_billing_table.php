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
        Schema::connection('integration')->create('sla_billing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('revenue', 12);
            $table->string('service_id', 18);
            $table->integer('subscriber_charged')->nullable();
            $table->string('subscriber_amount', 20)->nullable()->default('0.75');
            $table->integer('partial_charged')->nullable();
            $table->string('partial_amount', 20)->nullable()->default('0.107');
            $table->string('type', 88)->default('charged');
            $table->date('date');

            $table->index(['service_id', 'date'], 'service_id_2');
            $table->unique(['service_id', 'type', 'date'], 'service_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('sla_billing');
    }
};
