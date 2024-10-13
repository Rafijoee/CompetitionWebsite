<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Certificates;
use App\Models\Member;
use App\Models\Tempalate;

class CertificatesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Certificates::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'member_id' => Member::factory(),
            'tempalate_id' => Tempalate::factory(),
            'certificate_patch' => $this->faker->word(),
        ];
    }
}
