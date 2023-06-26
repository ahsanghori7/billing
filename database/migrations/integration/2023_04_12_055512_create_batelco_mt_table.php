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
        Schema::connection('integration')->create('batelco_mt', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88)->nullable();
            $table->string('request_id', 88)->nullable();
            $table->string('code', 24)->nullable();
            $table->boolean('in_error')->nullable();
            $table->string('transaction_uuid', 124)->nullable();
            $table->timestamp('Date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('batelco_mt');
    }
};
