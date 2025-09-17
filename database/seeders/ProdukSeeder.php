<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'NamaProduk' => 'Laptop',
                'Harga' => 7500000.00,
                'Stok' => 5,
            ],
            [
                'NamaProduk' => 'Mouse',
                'Harga' => 150000.00,
                'Stok' => 20,
            ],
            [
                'NamaProduk' => 'Keyboard',
                'Harga' => 300000.00,
                'Stok' => 15,
            ],
            [
                'NamaProduk' => 'Monitor',
                'Harga' => 1250000.00,
                'Stok' => 10,
            ],
        ]);
    }
}
