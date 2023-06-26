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
        Schema::create('audittrail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('datetime')->useCurrent();
            $table->string('script')->nullable();
            $table->string('user')->nullable();
            $table->string('action')->nullable();
            $table->string('table')->nullable();
            $table->string('field')->nullable();
            $table->longText('keyvalue')->nullable();
            $table->longText('oldvalue')->nullable();
            $table->longText('newvalue')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audittrail');
    }
};
