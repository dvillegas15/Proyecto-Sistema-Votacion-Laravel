<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalControlador;


Route::get('/', [PrincipalControlador::class, 'home'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
