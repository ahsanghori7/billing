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
        Schema::create('psms', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88)->nullable();
            $table->string('subservice', 88)->nullable();
            $table->string('transaction_id', 88)->nullable();
            $table->string('uniq_id', 88)->nullable();
            $table->string('product_id', 88)->nullable();
            $table->string('prodcut_name', 88)->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psms');
    }
};
