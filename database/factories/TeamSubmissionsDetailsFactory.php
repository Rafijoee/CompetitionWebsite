<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SubmissionType;
use App\Models\TeamSubmission;
use App\Models\TeamSubmissionsDetails;

class TeamSubmissionsDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamSubmissionsDetails::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'team_submissions_id' => TeamSubmission::factory(),
            'submission_type_id' => SubmissionType::factory(),
            'path' => $this->faker->word(),
        ];
    }
}
