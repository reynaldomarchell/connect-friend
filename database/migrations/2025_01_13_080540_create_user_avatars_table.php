<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_avatars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('avatar_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['user_id', 'avatar_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_avatars');
    }
};

