<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $name = ['admin', 'participant'];
        // $email = ['admin@itc.com','user@gmail.com'];

        // foreach ($name as $key => $value) {
        //     User::create([
        //         'name' => $value,
        //         'email' => $email[$key],
        //         'password' => bcrypt('password'),
        //     ])->assignRole($value);
        // }
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            \App\Models\User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                // Field lain yang diperlukan
            ]);
        }
    }
}
