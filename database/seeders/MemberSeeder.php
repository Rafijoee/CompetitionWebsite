<?php

namespace Database\Seeders;

use App\Models\Members;
use App\Models\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 0; $i < 3; $i++) {
            Members::create([
                'team_id' => 13,
                'full_name' => $faker->name,
                'universitas' => $faker->company, // Lebih cocok untuk nama universitas
                'active_certificate' => $faker->fileExtension, // Misalnya .pdf atau .jpg
                'member_role' => 'anggota',
            ]);
        }
    }
}
