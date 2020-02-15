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
        $role_id = (auth()->user()->role_id);
        switch ($role_id) {
            case "1":
                return view('inicio_administrador');
                break;
            case "2":
                return view('inicio_tecnico');
                break;
            case "3":
                return view('inicio_secretaria');
                break;
            case "4":
                return view('inicio_cliente');
                break;
        }
    }
}

