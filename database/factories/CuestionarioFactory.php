<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuestionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->text(),
            'user_id' =>rand(1,5),
        ];
    }
}
