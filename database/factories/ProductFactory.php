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
            'name' => $this->faker->randomElement(['Premium', 'Classic', 'Eco', 'Smart', 'Pro']) . ' ' . ucfirst($this->faker->word),
            'supplier_id' => \App\Models\Supplier::factory(),
        ];
    }
}
