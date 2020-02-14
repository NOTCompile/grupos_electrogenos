<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class SecretariaController extends Controller
{
    public function index_secretaria(){
        return view('inicio_secretaria');
    }
    
    public function producto_s(){
        $equipos_s= App\Equipo::paginate(10);
        return view('users.secretaria.productos',compact('equipos_s'));
    }

    public function producto_detalle_s($id){
        $equipo_s = App\Equipo::findOrFail($id);
        return view('users.secretaria.productos_detalle', compact('equipo_s'));
    }

/////

    public function usuario_s(){
        $usuarios_t = App\User::paginate(10);

        return view('users.secretaria.usuarios', compact('usuarios_t'));
    }

}
