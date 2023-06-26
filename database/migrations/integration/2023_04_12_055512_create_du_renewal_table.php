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
        Schema::connection('integration')->create('du_renewal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('billing_sid');
            $table->integer('shortcode');
            $table->text('message');
            $table->dateTime('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('du_renewal');
    }
};
