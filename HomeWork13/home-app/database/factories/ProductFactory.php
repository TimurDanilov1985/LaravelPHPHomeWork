<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'sku' => fake()->regexify('[A-Za-z0-9]{8}'),
            'name' => fake()->regexify('[A-Za-z]{8}'),
            'price' => fake()->randomNumber(5, false),
        ];
    }
}
