<?php

namespace Database\Seeders;

use App\Models\Teams;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $faker = Faker::create('id_ID');

        // Buat 10 data dummy untuk tabel teams
        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Teams::create([
                'user_id' => $i,
                'phone' => $faker->phoneNumber, // Menggunakan phoneNumber dari faker
                'team_name' => $faker->company, // Menggunakan nama perusahaan untuk variasi nama tim
                'stage_id' => $faker->numberBetween(4, 6), // Angka acak antara 4 dan 6
                'verified_status' => true, // Status verifikasi set ke true
                'category_id' => $faker->numberBetween(1, 3), // Angka acak antara 1 dan 3 untuk kategori
                'total_members' => $faker->numberBetween(1, 3), // Anggota tim antara 1 dan 3 orang
            ]);
        }
    }
}
