<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalControlador extends Controller
{
    public function home(){
        return view('index');
    }
}
