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
        Schema::connection('integration')->create('sla_account_info', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 88);
            $table->string('password', 88);
            $table->enum('type', ['real', 'test']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('sla_account_info');
    }
};
