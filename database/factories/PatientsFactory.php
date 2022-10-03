<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "clinic_id" => fake()->numberBetween($min = 1, $max = 5),
            "firstname" => fake()->firstName($gender = 'male' | 'female'),
            "lastname" => fake()->lastName(),
            "age" => fake()->numberBetween($min = 1, $max = 19),
            "gender" => fake()->randomElement(['male', 'female']),
            "address" => fake()->address(),
            "phone_number" => fake()->phoneNumber(),
        ];
    }
}
