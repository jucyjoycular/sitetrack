<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleExpenseTransaction>
 */
class MachineryExpenseTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'code' => fake()->code(),
            'ref_1' => fake()->ref_1(),
            'ref_2' => fake()->ref_2(),
            'description' => fake()->description(),
            'debt' => fake()->debt(),
            'credit' => fake()->credit(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
//            'email_verified_at' => null,
        ]);
    }
}
