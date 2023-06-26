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
        Schema::connection('integration')->create('ooredoo_kuwait_usersequence', function (Blueprint $table) {
            $table->integer('LeadID')->primary();
            $table->string('SequenceID', 250);
            $table->integer('SubscriberID')->nullable();

            $table->index(['SequenceID', 'SubscriberID'], 'Subscriber_Sequence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_kuwait_usersequence');
    }
};
