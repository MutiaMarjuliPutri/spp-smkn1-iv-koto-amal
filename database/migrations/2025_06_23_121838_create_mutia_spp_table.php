<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutia_spp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun'); // contoh: 2024/2025
            $table->integer('nominal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutia_spp');
    }
};
