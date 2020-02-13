<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class TecnicoController extends Controller
{
    public function tecnico(){
        return view('inicio_tecnico');
    }

    public function tecnico_producto(){
        $item_equipo = App\Equipo::paginate(5);
        return view('users.tecnico.productos',compact('item_equipo'));
    }

    public function producto_detalle($id){
        $equipo = App\Equipo::findOrFail($id);

        return view('users.tecnico.productos_detalle', compact('equipo'));
    }

    public function producto_agregar(){
        return view('users.administrador.productos_agregar');
    }

    public function producto_crear(){

        App\Equipo::create(request()->all);

        return redirect()->route('tecnico');
    }

    public function producto_editar($id){
        $equipo_editar = App\Equipo::findOrFail($id);

        return view('users.tecnico.producto_editar', compact('equipo_editar'));

    }

    public function producto_actualizar(Request $request, $id){
        $equipo_actualizar = App\Equipo::findOrFail($id);

        $equipo_actualizar->codigo_producto = $request->codigo_producto;        
        $equipo_actualizar->nombre_producto = $request->nombre_producto;
        $equipo_actualizar->empresa_producto = $request->empresa_producto;
        $equipo_actualizar->ubicacion_producto = $request->ubicacion_producto;
        $equipo_actualizar->periocidad_producto = $request->periocidad_producto;
        $equipo_actualizar->tipo_producto = $request->tipo_producto;
        $equipo_actualizar->celular_producto = $request->celular_producto;
        $equipo_actualizar->hora_inicio_producto = $request->hora_inicio_producto;
        $equipo_actualizar->hora_fin_producto = $request->hora_fin_producto;

        $equipo_actualizar->save();

        return redirect()->route('tecnico');
    }

    public function producto_eliminar($id){
        $equipo_eliminar = App\Equipo::findOrFail($id);

        $equipo_eliminar->delete();

        return redirect()->route('tecnico')->with('mensaje', 'Eliminado');
    }

}
