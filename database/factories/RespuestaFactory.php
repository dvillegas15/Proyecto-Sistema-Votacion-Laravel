<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RespuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'texto' =>$this->faker->sentence,
            'correcta' => rand(0,1),
            'pregunta_id' => rand(1, 300),
        ];
    }
}
