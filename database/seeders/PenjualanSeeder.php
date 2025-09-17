<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penjualan')->insert([
            [
                'TanggalPenjualan' => '2025-09-01',
                'TotalHarga' => 7800000.00,
                'PelangganID' => 1,
            ],
            [
                'TanggalPenjualan' => '2025-09-02',
                'TotalHarga' => 1350000.00,
                'PelangganID' => 2,
            ],
            [
                'TanggalPenjualan' => '2025-09-03',
                'TotalHarga' => 300000.00,
                'PelangganID' => 3,
            ],
        ]);
    }
}
