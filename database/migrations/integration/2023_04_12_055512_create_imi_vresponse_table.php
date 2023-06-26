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
        Schema::connection('integration')->create('imi_vresponse', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('transid', 88)->nullable();
            $table->string('authkey', 124)->nullable();
            $table->string('user_ip', 88)->nullable();
            $table->string('vtid', 88)->nullable();
            $table->integer('plan_id')->nullable();
            $table->string('ConsentURL', 124)->nullable();
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
        Schema::connection('integration')->dropIfExists('imi_vresponse');
    }
};
