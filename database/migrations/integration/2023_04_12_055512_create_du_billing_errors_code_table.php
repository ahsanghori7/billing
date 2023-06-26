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
        Schema::connection('integration')->create('du_billing_errors_code', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('error_code')->index('error_code');
            $table->string('error_message', 124);
            $table->text('error_description');
            $table->text('action_required');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_billing_errors_code');
    }
};
