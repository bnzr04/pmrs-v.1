<?php

namespace Database\Factories;

use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clinics>
 */
class ClinicsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "clinic_name" => fake()->name(),
            "description" => fake()->text(),
        ];
    }
}
