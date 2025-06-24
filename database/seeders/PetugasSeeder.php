<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        Petugas::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'nama_petugas' => 'Admin SPP',
            'level' => 'admin',
        ]);
    }
}
