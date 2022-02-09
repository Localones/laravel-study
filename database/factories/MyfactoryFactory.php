<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MyfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'desc' => $this->faker->paragraph,
            'completed' => false,
        ];
    }
}
