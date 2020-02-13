<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class EquipoController extends Controller
{
    public function index(){
        return view('users.administrador.inicio');
    }
}
