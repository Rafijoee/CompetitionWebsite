<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\CertificateTemplates;
use App\Models\Stage;

class CertificateTemplatesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CertificateTemplates::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'stage_id' => Stage::factory(),
            'template_patch' => $this->faker->word(),
        ];
    }
}
