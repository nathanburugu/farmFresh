<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crop>
 */
class CropFactory extends Factory
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
            "name" => $this->faker->word(),
            'user_id' =>User::pluck('id')->random(),
            'duration' => $this->faker->numberBetween(1, 10),
            'acres' => $this->faker->numberBetween(1, 10),
            'notes' => $this->faker->numberBetween(1, 10),

        ];
    }
}
