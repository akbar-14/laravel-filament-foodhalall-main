<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'barcode' => fake()->regexify('[A-Za-z0-9]{200}'),
            'ingridients' => fake()->text(),
            'allergens' => fake()->text(),
            'image' => fake()->word(),
            'status' => fake()->randomElement(["haram","no-contamination","halal"]),
        ];
    }
}
