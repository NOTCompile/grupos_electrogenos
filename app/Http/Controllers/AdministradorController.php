<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class AdministradorController extends Controller
{
    public function administrador(){
        return view('inicio_administrador');
    }

    public function administrador_producto(){
        $item_equipo = App\Equipo::paginate(5);

        return view('users.administrador.productos',compact('item_equipo'));
    }

    public function producto_detalle($id){
        $equipo = App\Equipo::findOrFail($id);

        return view('users.administrador.productos_detalle', compact('equipo'));
    }

    public function producto_agregar(){
        return view('users.administrador.productos_agregar');
    }

    public function producto_crear(Request $request){
        $request->validate([
            'codigo' => 'required',

        ]);

        $nuevo_equipo = new App\Equipo;
        $nuevo_equipo::all();
    }

    public function producto_editar($id){

    }

    public function producto_actualizar(Request $request, $id){

    }

    public function producto_eliminar($id){

    }

}
