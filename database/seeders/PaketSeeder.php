<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'name' => 'Bekam kering',
                'harga' => 150000,
                'keterangan' => 'Metode tanpa sayatan, menggunakan tekanan vakum untuk meningkatkan aliran darah.'
            ],
            [
                'name' => 'Bekam basah',
                'harga' => 200000,
                'keterangan' => 'Metode dengan sayatan kecil untuk mengeluarkan darah dan racun, serta menggunakan tekanan vakum.'
            ]
        ];

        foreach ($lists as $paket) {
            Paket::updateOrCreate([
                "name" => $paket['name']
            ], $paket);
        }
    }
}
