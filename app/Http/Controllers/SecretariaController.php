<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    public function secretaria(){
        return view('inicio_secretaria');
    }
}
