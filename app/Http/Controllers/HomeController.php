<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function administrador(){

        return view('administrador.inicio');
    }

    public function tecnico(){

        return view('tecnico.inicio');
    }

    public function secretaria(){

        return view('secretaria.inicio');
    }

    public function cliente(){

        return view('cliente.inicio');
    }
}

