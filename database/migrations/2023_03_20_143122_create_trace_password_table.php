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
        Schema::create('trace_password', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id')->nullable();
            $table->integer('sub_id')->nullable();
            $table->string('msisdn', 88)->nullable();
            $table->text('last_query')->nullable();
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
        Schema::dropIfExists('trace_password');
    }
};
