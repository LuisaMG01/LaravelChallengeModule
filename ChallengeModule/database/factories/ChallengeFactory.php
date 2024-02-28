<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Generate a random company name
            'description' => $this->faker->sentence, // Generate a random sentence
            'checked' => $this->faker->boolean, // Generate a random boolean value
            'reward_coins' => $this->faker->numberBetween(100, 1000), // Generate a random number between 100 and 1000
            'max_users' => $this->faker->numberBetween(1, 10), // Generate a random number between 1 and 10
            'current_users' => $this->faker->numberBetween(0, 5), // Generate a random number between 0 and 5
            'product_name' => $this->faker->word, // Generate a random word
            'product_quantity' => $this->faker->numberBetween(1, 100), // Generate a random number between 1 and 100
        ];
    }
}
