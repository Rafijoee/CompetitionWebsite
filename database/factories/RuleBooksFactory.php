<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\RuleBooks;

class RuleBooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RuleBooks::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'stage' => $this->faker->randomElement(["penyisihan","semi"]),
            'rule_book_path' => $this->faker->word(),
        ];
    }
}
