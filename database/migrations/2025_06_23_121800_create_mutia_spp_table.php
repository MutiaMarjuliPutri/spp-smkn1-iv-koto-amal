<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutia_spp', function (Blueprint $table) {
            $table->id(); // PK auto-increment (unsignedBigInteger)
            $table->year('tahun'); // Tahun ajaran
            $table->integer('nominal'); // Nominal SPP
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutia_spp');
    }
};
