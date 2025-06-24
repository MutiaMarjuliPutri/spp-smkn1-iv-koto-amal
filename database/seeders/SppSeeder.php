<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Spp;

class SppSeeder extends Seeder
{
    public function run(): void
    {
        Spp::create([
            'tahun' => 2024,
            'nominal' => 250000,
        ]);
    }
}
