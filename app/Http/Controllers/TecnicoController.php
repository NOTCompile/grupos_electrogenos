<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function tecnico(){
        return view('inicio_tecnico');
    }
}