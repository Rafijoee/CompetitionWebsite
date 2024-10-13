<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Members;
use App\Models\Team;
use App\Models\University;

class MembersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Members::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'full_name' => $this->faker->word(),
            'university_id' => University::factory(),
            'ktm_path' => $this->faker->word(),
            'active_certificate' => $this->faker->word(),
            'member_role' => $this->faker->randomElement(["ketua","anggota"]),
        ];
    }
}
