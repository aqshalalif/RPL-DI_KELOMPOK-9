<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'price' => $this->faker->numberBetween($min = 0, $max = 999999999), // password
            'quantity' => $this->faker->numberBetween($min = 0, $max = 999),
            'location' => $this->faker->cityPrefix(),
        ];
    }
}
