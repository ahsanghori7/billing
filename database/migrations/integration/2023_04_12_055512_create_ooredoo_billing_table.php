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
        Schema::connection('integration')->create('ooredoo_billing', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->date('Date');
            $table->string('serviceType', 25);
            $table->string('serviceId', 25);
            $table->string('serviceNode', 25);
            $table->float('BillingCount', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_billing');
    }
};
