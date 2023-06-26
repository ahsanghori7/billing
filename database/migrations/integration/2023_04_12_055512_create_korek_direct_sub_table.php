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
        Schema::connection('integration')->create('korek_direct_sub', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('msisdn', 88);
            $table->integer('channel_id');
            $table->string('request', 24);
            $table->string('user_ip', 88);
            $table->text('response')->nullable();
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
        Schema::connection('integration')->dropIfExists('korek_direct_sub');
    }
};
