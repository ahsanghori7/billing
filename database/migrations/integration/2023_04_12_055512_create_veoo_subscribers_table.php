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
        Schema::connection('integration')->create('veoo_subscribers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id');
            $table->string('msisdn', 88);
            $table->string('keyword', 24);
            $table->integer('service_id');
            $table->boolean('verify');
            $table->char('status', 20);
            $table->string('message', 124)->nullable();
            $table->string('error', 124)->nullable();
            $table->text('http_build_query');
            $table->text('full_response');
            $table->timestamp('Date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('veoo_subscribers');
    }
};
