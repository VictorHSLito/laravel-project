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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->text('payload');
            $table->integer('last_activity');
            $table->unsignedBigInteger('user_id')->nullable(); // Adiciona a coluna user_id
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
        });         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
