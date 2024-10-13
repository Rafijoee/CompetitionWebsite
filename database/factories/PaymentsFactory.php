<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payments;
use App\Models\Stage;
use App\Models\Team;

class PaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payments::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'stage_id' => Stage::factory(),
            'payment_path' => $this->faker->word(),
            'status' => $this->faker->randomElement(["verified","unverified"]),
        ];
    }
}
