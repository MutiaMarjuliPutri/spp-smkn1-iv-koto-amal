<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutia_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nama');
            $table->string('kelas');
            $table->text('alamat');
            $table->unsignedBigInteger('spp_id'); // FK ke mutia_spp

            $table->timestamps();

            // Foreign Key
            $table->foreign('spp_id')
                ->references('id')
                ->on('mutia_spp')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutia_siswa');
    }
};
