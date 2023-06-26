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
        Schema::connection('integration')->create('jordan_pinrequests', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('MSISDN', 20)->nullable();
            $table->timestamp('Date')->useCurrent();
            $table->integer('Status')->nullable();
            $table->integer('ErrorCode')->nullable();
            $table->string('ErrorDesc', 100)->nullable();
            $table->string('source', 100)->nullable();
            $table->string('subsource', 100)->nullable();
            $table->string('minisite', 100)->nullable();
            $table->integer('ServiceID')->nullable();
            $table->integer('ChannelID')->nullable();
            $table->integer('ProfileID')->nullable();
            $table->integer('OperatorID')->nullable();
            $table->string('Request', 20)->nullable();
            $table->integer('RequestLanguage')->nullable();
            $table->integer('shortcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('jordan_pinrequests');
    }
};
