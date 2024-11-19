<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'email' => 'admin@bekambpp.com',
            'name' => 'Administrator Bekam Balikpapan',
            'password' => 'admin110',
            'is_admin' => true,
        ]);

        \App\Models\User::factory()->create([
            'email' => 'iqbalfarhan1996@gmail.com',
            'name' => 'Iqbal Farhan Syuhada',
            'password' => 'adminoke',
            'is_admin' => false,
        ]);

        \App\Models\User::factory(10)->create();

        $this->call([
            PaketSeeder::class,
            SesiSeeder::class,
        ]);

    }
}
