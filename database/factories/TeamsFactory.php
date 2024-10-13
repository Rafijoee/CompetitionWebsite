<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Stage;
use App\Models\Teams;
use App\Models\User;

class TeamsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teams::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'phone' => $this->faker->phoneNumber(),
            'team_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'stage_id' => Stage::factory(),
            'verified_status' => $this->faker->randomElement(["verified","unverified"]),
            'category_id' => Category::factory(),
            'total_members' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
