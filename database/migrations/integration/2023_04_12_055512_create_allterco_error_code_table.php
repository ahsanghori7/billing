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
        Schema::connection('integration')->create('allterco_error_code', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('error_code')->index('subscription_result');
            $table->text('description');
            $table->string('call_type', 88);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('allterco_error_code');
    }
};
