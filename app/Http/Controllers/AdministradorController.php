<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdministradorController extends Controller
{
    public function administrador(){
        return view('inicio_administrador');
    }

    public function administrador_producto(){
        $equipos = App\Equipo::paginate(5);

        return view('users.administrador.productos',compact('equipos'));
    }

    public function producto_detalle($id){
        $equipo_a = App\Equipo::findOrFail($id);

        return view('users.administrador.productos_detalle', compact('equipo_a'));
    }

    public function producto_agregar(){
        return view('users.administrador.productos_agregar');
    }

    public function producto_crear(Request $request){

        $request->validate([
            'codigo' => 'required',
        ]);

        $nuevo_equipo_a = new App\Equipo($request->all());

        $nuevo_equipo_a->save();
        
        return redirect()->route('inicio_administrador');
    }

    public function producto_editar($id){
        $equipo_a_e = App\Equipo::findOrFail($id);

        return view('users.administrador.productos_editar', compact('equipo_a_e'));

    }

    public function producto_actualizar(Request $request, $id){
        $equipo_a_actualizar = App\Equipo::findOrFail($id);

        $equipo_a_actualizar->codigo = $request->codigo;        
        $equipo_a_actualizar->nombre = $request->nombre;
        $equipo_a_actualizar->empresa = $request->empresa;
        $equipo_a_actualizar->ubicacion = $request->ubicacion;
        $equipo_a_actualizar->celular = $request->celular;
        $equipo_a_actualizar->periocidad = $request->periocidad;
        $equipo_a_actualizar->tipo_producto = $request->tipo_producto;
        $equipo_a_actualizar->marca_motor = $request->marca_motor;
        $equipo_a_actualizar->modelo_motor = $request->modelo_motor;
        $equipo_a_actualizar->nserie_motor = $request->nserie_motor;
        $equipo_a_actualizar->potencia_motor = $request->potencia_motor;
        $equipo_a_actualizar->marca_generador = $request->marca_generador;
        $equipo_a_actualizar->modelo_generador = $request->modelo_generador;
        $equipo_a_actualizar->nserie_generador = $request->nserie_generador;
        $equipo_a_actualizar->potencia_generador = $request->potencia_generador;
        $equipo_a_actualizar->hora_inicio = $request->hora_inicio;
        $equipo_a_actualizar->hora_fin = $request->hora_fin;
        $equipo_a_actualizar->user_id = $request->user_id;


        $equipo_a_actualizar->save();

        return redirect()->route('administrador');
    }

    public function producto_eliminar($id){
        $equipo_eliminar = App\Equipo::findOrFail($id);

        $equipo_eliminar->delete();

        return back()->with('mensaje', 'Eliminado');
    }

}
