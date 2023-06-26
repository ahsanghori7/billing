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
        Schema::connection('integration')->create('sla_pin_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->string('description', 124);
            $table->string('request_url', 124);
            $table->text('parameters');
            $table->text('response')->nullable();
            $table->boolean('error')->nullable();
            $table->integer('code')->nullable();
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
        Schema::connection('integration')->dropIfExists('sla_pin_log');
    }
};
