<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wellcome_messages', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->text('free_text')->nullable();
            $table->integer('subservice_id')->nullable();
            $table->string('shortcode', 9);
            $table->integer('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wellcome_messages');
    }
};
