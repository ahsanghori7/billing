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
        Schema::connection('integration')->create('vl_subscriber', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('LeadID');
            $table->string('msisdn', 18);
            $table->integer('RequestId');
            $table->integer('SubserviceID');
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('vl_subscriber');
    }
};
