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
        Schema::connection('integration')->create('mondiapay_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('operator_id')->default(0);
            $table->unsignedInteger('country_id')->default(0);
            $table->unsignedInteger('subscription_type_id')->default(0);
            $table->string('service_name', 191)->default('');
            $table->date('date');
            $table->integer('full_billing_users')->default(0);
            $table->decimal('full_billing_amount')->default(0);
            $table->integer('partial_billing_users')->default(0);
            $table->decimal('partial_billing_amount')->default(0);
            $table->integer('total_users')->default(0);
            $table->decimal('total_amount')->default(0);
            $table->decimal('earning')->default(0);
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
        Schema::connection('integration')->dropIfExists('mondiapay_statistics');
    }
};
