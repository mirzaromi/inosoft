<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kendaraan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "Mirza",
            'email' => "mirzaromi12@gmail.com",
            'password' => "mirzaromi123",
        ]);

        
        Kendaraan::create([
            "tahun" => "2007",
            "warna" => "hitam",
            "harga" => 6000,

        ])->motor()->create([
            "mesin" => "125cc",
            "tipeSuspensi" => "standar",
            "tipeTransmisi" => "manual",
        ]);

        Kendaraan::create([
            "tahun" => "2007",
            "warna" => "hitam",
            "harga" => 6000,

        ])->mobil()->create([
            "mesin" => "125cc",
            "tipeSuspensi" => "standar",
            "tipeTransmisi" => "manual",
        ]);
    }
}
