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
        Schema::connection('integration')->create('mondiapay_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subscription_type_id')->default(0);
            $table->unsignedInteger('country_id')->default(0);
            $table->unsignedInteger('operator_id')->default(0);
            $table->unsignedInteger('subservice_id')->default(0);
            $table->string('service_name', 191)->default('');
            $table->string('currency', 8)->default('EGP');
            $table->decimal('end_user_tarrif', 4)->default(0);
            $table->decimal('revenue_percent', 2)->nullable()->default(0);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('mondiapay_services');
    }
};
