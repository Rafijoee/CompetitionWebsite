<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Stage;
use App\Models\Team;
use App\Models\TeamSubmissions;

class TeamSubmissionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamSubmissions::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'stage_id' => Stage::factory(),
        ];
    }
}
