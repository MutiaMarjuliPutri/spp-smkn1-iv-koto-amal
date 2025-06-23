<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutia_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('mutia_siswa')->onDelete('cascade');
            $table->foreignId('petugas_id')->constrained('mutia_petugas')->onDelete('cascade');
            $table->foreignId('spp_id')->constrained('mutia_spp')->onDelete('cascade');
            $table->date('tanggal_bayar');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutia_pembayaran');
    }
};
