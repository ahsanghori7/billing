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
        Schema::create('marketing_affiliates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->nullable();
            $table->string('source', 25)->nullable();
            $table->string('postback_url')->nullable();
            $table->boolean('enabled')->nullable()->default(true);
            $table->string('method', 8)->nullable();
            $table->string('source_parameter', 20)->nullable();
            $table->string('clickid_parameter', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketing_affiliates');
    }
};
