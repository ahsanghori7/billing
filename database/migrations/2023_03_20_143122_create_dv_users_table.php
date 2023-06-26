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
        Schema::create('dv_users_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('user_id', 88);
            $table->string('msisdn', 88);
            $table->string('email', 88)->nullable();
            $table->string('nickname', 88)->nullable();
            $table->string('user_ins_date', 88)->nullable();
            $table->boolean('subscribed')->default(false);
            $table->integer('service_id');
            $table->string('dve_login', 88)->nullable();
            $table->string('dve_password', 124)->nullable();
            $table->integer('dve_real_password');
            $table->timestamp('dve_ins_date')->useCurrent();
            $table->string('dve_ticket', 124)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_users_v2');
    }
};
