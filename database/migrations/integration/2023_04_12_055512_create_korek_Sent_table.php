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
        Schema::connection('integration')->create('korek_Sent', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('msisdn', 88)->index('msisdn');
            $table->string('mtid', 124)->nullable()->index('mtid');
            $table->text('Text')->nullable();
            $table->integer('smsId')->nullable();
            $table->integer('LinkID')->nullable();
            $table->integer('CPID')->nullable();
            $table->string('Type', 10)->nullable();
            $table->string('Shortcode', 12)->nullable();
            $table->string('Language', 8)->nullable();
            $table->timestamp('Date')->useCurrent();
            $table->string('message', 250)->nullable();
            $table->integer('UserID')->nullable();
            $table->string('Response', 124)->nullable();
            $table->boolean('status')->nullable();
            $table->string('data', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('korek_Sent');
    }
};
