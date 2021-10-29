<?php

namespace Database\Seeders;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Cuestionario;
use App\Models\User;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Cuestionario::factory(2)->create();
        Pregunta::factory(300)->create();
        Respuesta::factory(100)->create();
    }
}
