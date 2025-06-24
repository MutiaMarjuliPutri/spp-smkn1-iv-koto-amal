<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mutia_siswa')->insert([
            'nisn' => '12345678',
            'nama' => 'Andi Saputra',
            'kelas' => 'X IPA',
            'alamat' => 'Jl. Merdeka No. 45, Padang', // ✅ alamat ditambah
            'spp_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
