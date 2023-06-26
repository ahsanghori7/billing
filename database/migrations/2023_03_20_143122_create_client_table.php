
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
        Schema::create('client_v2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('client', 124);
            $table->string('username', 88);
            $table->string('password', 124);
            $table->string('notification_url', 512)->nullable();
            $table->boolean('enable_notification')->default(false);
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_v2');
    }
};
