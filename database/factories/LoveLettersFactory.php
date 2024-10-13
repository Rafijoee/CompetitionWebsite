<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\LoveLetters;
use App\Models\Stage;
use App\Models\Team;

class LoveLettersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoveLetters::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'stage_id' => Stage::factory(),
            'love_letter_patch' => $this->faker->word(),
        ];
    }
}
