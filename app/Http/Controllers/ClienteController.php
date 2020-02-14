<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class ClienteController extends Controller
{
    public function index_cliente(){
        return view('inicio_cliente');
    }
    
    public function producto_c(){
        $equipos_c = App\Equipo::paginate(10);
        return view('users.cliente.productos',compact('equipos_c'));
    }

    public function producto_detalle_c($id){
        $equipo_c = App\Equipo::findOrFail($id);
        return view('users.cliente.productos_detalle', compact('equipo_c'));
    }

/////

    public function usuario_c(){
        $usuarios_c = App\User::paginate(10);

        return view('users.cliente.usuarios', compact('usuarios_c'));
    }

}
