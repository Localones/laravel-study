<?php

namespace Database\Factories;

use App\Models\Mypage;
use Illuminate\Database\Eloquent\Factories\Factory;


class MypageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Mypage::class;


    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'desc' => $this->faker->paragraph,
            'completed' => false,
        ];
    }

}
