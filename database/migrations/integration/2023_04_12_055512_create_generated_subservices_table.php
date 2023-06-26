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
        Schema::connection('integration')->create('generated_subservices', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SubservicesID');
            $table->integer('ProviderID');
            $table->string('GeneratedSubservices', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('generated_subservices');
    }
};
