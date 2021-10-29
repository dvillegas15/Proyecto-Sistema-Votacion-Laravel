<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pregunta;
class ListaPreguntas extends Component
{
    public function render()
    {
        return view('livewire.lista-preguntas', [
            'respuestas' =>Pregunta::latest()->with('respuesta')->take(9)->get()
         ] );
    }
}
