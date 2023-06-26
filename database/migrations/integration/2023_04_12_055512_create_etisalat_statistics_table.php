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
        Schema::connection('integration')->create('etisalat_statistics', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('packageID');
            $table->float('Amount', 10, 0);
            $table->integer('user_charged')->nullable();
            $table->char('normal_price', 24)->nullable();
            $table->integer('fallback_charged')->nullable();
            $table->char('fallback_price', 24)->nullable();
            $table->date('Date');

            $table->unique(['Date', 'packageID'], 'DatePackage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('etisalat_statistics');
    }
};
