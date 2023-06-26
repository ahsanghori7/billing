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
        Schema::connection('integration')->create('ooredoo_actions_list', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('OperationId', 3)->nullable();
            $table->string('CPAction', 70)->nullable();
            $table->string('ShortDescription', 46)->nullable();
            $table->string('LongDescription', 164)->nullable();
            $table->integer('Action')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_actions_list');
    }
};
