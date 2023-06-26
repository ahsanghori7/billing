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
        Schema::connection('integration')->create('veoo_errors', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ErrorCode');
            $table->string('Description', 124);
            $table->string('State', 28);
            $table->string('Label', 88);
            $table->string('ActionRequired', 124)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_errors');
    }
};
