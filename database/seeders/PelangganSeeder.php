<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            [
                'NamaPelanggan' => 'Andi',
                'Alamat' => 'Jl. Merpati No. 10',
                'NomorTelepon' => '081234567890',
            ],
            [
                'NamaPelanggan' => 'Budi',
                'Alamat' => 'Jl. Kenanga No. 22',
                'NomorTelepon' => '082345678901',
            ],
            [
                'NamaPelanggan' => 'Citra',
                'Alamat' => 'Jl. Melati No. 5',
                'NomorTelepon' => '083456789012',
            ],
        ]);
    }
}
