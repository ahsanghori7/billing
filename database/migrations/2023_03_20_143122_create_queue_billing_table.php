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
        Schema::create('queue_billing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscriber_id')->unique('subscriber_id');
            $table->integer('integration_id');
            $table->boolean('status')->default(false);
            $table->integer('billing_level')->nullable();
            $table->boolean('priority')->default(false);
            $table->dateTime('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue_billing');
    }
};
