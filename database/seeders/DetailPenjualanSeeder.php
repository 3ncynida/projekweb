<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detail_penjualan')->insert([
            [
                'PenjualanID' => 1,
                'ProdukID' => 1,
                'JumlahProduk' => 1,
                'Subtotal' => 7500000.00,
            ],
            [
                'PenjualanID' => 1,
                'ProdukID' => 2,
                'JumlahProduk' => 2,
                'Subtotal' => 300000.00,
            ],
            [
                'PenjualanID' => 2,
                'ProdukID' => 4,
                'JumlahProduk' => 1,
                'Subtotal' => 1250000.00,
            ],
            [
                'PenjualanID' => 2,
                'ProdukID' => 2,
                'JumlahProduk' => 1,
                'Subtotal' => 150000.00,
            ],
            [
                'PenjualanID' => 3,
                'ProdukID' => 3,
                'JumlahProduk' => 1,
                'Subtotal' => 300000.00,
            ],
        ]);
    }
}
