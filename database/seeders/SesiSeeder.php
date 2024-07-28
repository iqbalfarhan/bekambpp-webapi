<?php

namespace Database\Seeders;

use App\Models\Sesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'order' => 1,
                'name' => "sesi 1",
                'jam' => [
                    "09:00",
                    "09:30",
                ],
                'keterangan' => "keterangan sesi 1",
            ],
            [
                'order' => 2,
                'name' => "sesi 2",
                'jam' => [
                    "09:30",
                    "10:00",
                ],
                'keterangan' => "keterangan sesi 2",
            ],
            [
                'order' => 3,
                'name' => "sesi 3",
                'jam' => [
                    "10:00",
                    "10:30",
                ],
                'keterangan' => "keterangan sesi 3",
            ],
            [
                'order' => 4,
                'name' => "sesi 4",
                'jam' => [
                    "10:30",
                    "11:00",
                ],
                'keterangan' => "keterangan sesi 4",
            ],
            [
                'order' => 5,
                'name' => "sesi 5",
                'jam' => [
                    "11:00",
                    "11:30",
                ],
                'keterangan' => "keterangan sesi 5",
            ],
            [
                'order' => 6,
                'name' => "sesi 6",
                'jam' => [
                    "11:30",
                    "12:00",
                ],
                'keterangan' => "keterangan sesi 6",
            ],
            [
                'order' => 7,
                'name' => "sesi 7",
                'jam' => [
                    "12:00",
                    "12:30",
                ],
                'keterangan' => "keterangan sesi 7",
            ],
            [
                'order' => 8,
                'name' => "sesi 8",
                'jam' => [
                    "12:30",
                    "13:00",
                ],
                'keterangan' => "keterangan sesi 8",
            ],
            [
                'order' => 9,
                'name' => "sesi 9",
                'jam' => [
                    "13:00",
                    "13:30",
                ],
                'keterangan' => "keterangan sesi 9",
            ],
            [
                'order' => 10,
                'name' => "sesi 10",
                'jam' => [
                    "13:30",
                    "14:00",
                ],
                'keterangan' => "keterangan sesi 10",
            ],
            [
                'order' => 11,
                'name' => "sesi 11",
                'jam' => [
                    "14:00",
                    "14:30",
                ],
                'keterangan' => "keterangan sesi 11",
            ],
            [
                'order' => 12,
                'name' => "sesi 12",
                'jam' => [
                    "14:30",
                    "15:00",
                ],
                'keterangan' => "keterangan sesi 12",
            ],
            [
                'order' => 13,
                'name' => "sesi 13",
                'jam' => [
                    "15:00",
                    "15:30",
                ],
                'keterangan' => "keterangan sesi 13",
            ],
            [
                'order' => 14,
                'name' => "sesi 14",
                'jam' => [
                    "15:30",
                    "16:00",
                ],
                'keterangan' => "keterangan sesi 14",
            ],
            [
                'order' => 15,
                'name' => "sesi 15",
                'jam' => [
                    "16:00",
                    "16:30",
                ],
                'keterangan' => "keterangan sesi 15",
            ],
            [
                'order' => 16,
                'name' => "sesi 16",
                'jam' => [
                    "16:30",
                    "17:00",
                ],
                'keterangan' => "keterangan sesi 16",
            ],
            [
                'order' => 17,
                'name' => "sesi 17",
                'jam' => [
                    "17:00",
                    "17:30",
                ],
                'keterangan' => "keterangan sesi 17",
            ],
            [
                'order' => 18,
                'name' => "sesi 18",
                'jam' => [
                    "17:30",
                    "18:00",
                ],
                'keterangan' => "keterangan sesi 18",
            ],
        ];

        foreach ($lists as $sesi) {
            Sesi::updateOrCreate([
                "jam" => $sesi['jam']
            ], $sesi);
        }
    }
}
