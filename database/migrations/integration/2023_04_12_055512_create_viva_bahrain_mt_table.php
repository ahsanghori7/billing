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
        Schema::connection('integration')->create('viva_bahrain_mt', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->string('request_id', 88);
            $table->string('code', 24);
            $table->boolean('in_error');
            $table->string('transaction_uuid', 124)->nullable();
            $table->text('message')->nullable();
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
        Schema::connection('integration')->dropIfExists('viva_bahrain_mt');
    }
};
