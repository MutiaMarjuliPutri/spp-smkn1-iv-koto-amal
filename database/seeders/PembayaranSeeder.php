<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    public function run(): void
    {
        Pembayaran::create([
            'petugas_id' => 1,
            'siswa_id' => 1,
            'tanggal_bayar' => now(),
            'bulan_dibayar' => 'Juni',
            'tahun_dibayar' => '2025',
            'spp_id' => 1,
            'jumlah_bayar' => 250000,
        ]);
    }
}
