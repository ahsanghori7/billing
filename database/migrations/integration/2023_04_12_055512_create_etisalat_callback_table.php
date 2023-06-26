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
        Schema::connection('integration')->create('etisalat_callback', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('TransactionType', 88)->nullable()->index('TransactionType');
            $table->string('msisdn', 88)->index('msisdn_2');
            $table->string('package_id', 88)->index('package_id');
            $table->string('Amount', 88)->index('Amount');
            $table->string('Channel', 88);
            $table->string('transaction_id', 88)->nullable();
            $table->string('transaction_id1', 88)->nullable()->index('transaction_id1');
            $table->string('transaction_id2', 88)->nullable();
            $table->integer('keyword')->nullable();
            $table->timestamp('Date')->useCurrent()->index('Date_2');
            $table->boolean('processed')->default(false)->index('processed');

            $table->index(['TransactionType'], 'TransactionType_2');
            $table->index(['msisdn'], 'msisdn');
            $table->index(['Date'], 'Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('etisalat_callback');
    }
};
