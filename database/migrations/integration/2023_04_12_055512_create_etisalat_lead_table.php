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
        Schema::connection('integration')->create('etisalat_lead', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('LeadID');
            $table->string('msisdn', 88);
            $table->integer('packageID');
            $table->string('token', 88);
            $table->string('txnid', 88)->nullable();
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
        Schema::connection('integration')->dropIfExists('etisalat_lead');
    }
};
