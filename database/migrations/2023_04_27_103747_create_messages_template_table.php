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
        Schema::create('messages_template', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->text('free_text')->nullable();
            $table->text('exit_text')->nullable();
            $table->integer('subservice_id')->nullable();
            $table->string('shortcode', 9);
            $table->integer('type');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages_template');
    }
};
