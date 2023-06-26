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
        Schema::connection('integration')->create('asiacell_billing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('source', 4);
            $table->integer('billed_user');
            $table->date('date');

            $table->unique(['source', 'date'], 'unique_billed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('asiacell_billing');
    }
};
