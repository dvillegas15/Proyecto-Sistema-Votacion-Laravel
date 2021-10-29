<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PreguntaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'textoPregunta' =>$this->faker->sentence,
            'cuestionario_id' => rand(1,2),
        ];
    }
}
