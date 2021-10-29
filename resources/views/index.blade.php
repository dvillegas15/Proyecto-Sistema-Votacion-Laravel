@extends('layouts.web')
@section('content')
    <div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">BIENVENIDO</h1>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Sistema de Votación</h1>
    <h2 class="text-xl text-red-600">Registrar preguntas y respuestas</h2>
    </div>

    <livewire:lista-preguntas>
@endsection