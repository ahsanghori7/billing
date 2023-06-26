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
        Schema::connection('integration')->create('sla_he', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('uniqid', 88);
            $table->string('request_from', 124);
            $table->char('status', 18)->nullable();
            $table->text('message')->nullable();
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('sla_he');
    }
};
