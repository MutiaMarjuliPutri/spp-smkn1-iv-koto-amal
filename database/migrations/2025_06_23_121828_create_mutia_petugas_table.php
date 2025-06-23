<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutia_petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('level', ['admin', 'petugas']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutia_petugas');
    }
};
