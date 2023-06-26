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
        Schema::connection('integration')->create('ooredoo_kuwait_services', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Name', 35);
            $table->string('serviceType', 20);
            $table->string('serviceId', 20);
            $table->string('PrepaidPlanID', 20);
            $table->string('PostPaidPlanID', 20);
            $table->string('FreePlanID', 88)->nullable();
            $table->string('serviceNode', 20)->default('Absolutely_Dig');
            $table->integer('BillingSID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_kuwait_services');
    }
};
