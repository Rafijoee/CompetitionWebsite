<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Teams;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // rolesSeeder::class,
            // UserSeeder::class,
            // CategoriesSeeder::class,
            // StagessSeeder::class,
            // TeamsSeeder::class,
            // universitySeeder::class,
            MemberSeeder::class,
            // SubmissionsSeeder::class,
            // TeamSubmissionsSeeder::class,
            // TeamSubmissionDetailsSeeder::class,

        ]);


    }
}
