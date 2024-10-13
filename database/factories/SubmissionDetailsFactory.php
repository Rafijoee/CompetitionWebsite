<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Stage;
use App\Models\SubmissionDetails;
use App\Models\SubmissionsType;

class SubmissionDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubmissionDetails::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'submissions_type_id' => SubmissionsType::factory(),
            'stage_id' => Stage::factory(),
        ];
    }
}
