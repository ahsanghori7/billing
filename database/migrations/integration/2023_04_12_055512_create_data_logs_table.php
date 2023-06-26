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
        Schema::connection('integration')->create('data_logs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 200);
            $table->string('table_name', 200);
            $table->string('group_identifier', 200);
            $table->string('key', 200);
            $table->string('value', 200);
            $table->dateTime('created_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('data_logs');
    }
};
