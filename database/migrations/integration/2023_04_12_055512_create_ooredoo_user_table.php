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
        Schema::connection('integration')->create('ooredoo_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id');
            $table->integer('subservice_id');
            $table->timestamp('subscription_day')->useCurrent();
            $table->integer('validity_days')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('ooredoo_user');
    }
};
