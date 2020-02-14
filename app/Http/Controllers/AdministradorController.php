<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdministradorController extends Controller
{
    public function index_administrador(){
        return view('inicio_administrador');
    }

    public function producto_a(){
        $equipos = App\Equipo::paginate(10);

        return view('users.administrador.productos',compact('equipos'));
    }

    public function producto_detalle_a($id){
        $equipo_a = App\Equipo::findOrFail($id);

        return view('users.administrador.productos_detalle', compact('equipo_a'));
    }

    public function producto_agregar_a(){
        return view('users.administrador.productos_agregar');
    }

    public function producto_crear_a(Request $request){

        $request->validate([
            'codigo' => 'required',
        ]);

        $nuevo_equipo_a = new App\Equipo($request->all());
/*
        $nuevo_equipo_a->codigo = $request->codigo;        
        $nuevo_equipo_a->nombre = $request->nombre;
        $nuevo_equipo_a->empresa = $request->empresa;
        $nuevo_equipo_a->ubicacion = $request->ubicacion;
        $nuevo_equipo_a->celular = $request->celular;
        $nuevo_equipo_a->periocidad = $request->periocidad;
        $nuevo_equipo_a->tipo_producto = $request->tipo_producto;
        $nuevo_equipo_a->marca_motor = $request->marca_motor;
        $nuevo_equipo_a->modelo_motor = $request->modelo_motor;
        $nuevo_equipo_a->nserie_motor = $request->nserie_motor;
        $nuevo_equipo_a->potencia_motor = $request->potencia_motor;
        $nuevo_equipo_a->marca_generador = $request->marca_generador;
        $nuevo_equipo_a->modelo_generador = $request->modelo_generador;
        $nuevo_equipo_a->nserie_generador = $request->nserie_generador;
        $nuevo_equipo_a->potencia_generador = $request->potencia_generador;
        $nuevo_equipo_a->hora_inicio = $request->hora_inicio;
        $nuevo_equipo_a->hora_fin = $request->hora_fin;
        $nuevo_equipo_a->user_id = $request->user_id;*/

        $nuevo_equipo_a->save();
        
        return redirect()->route('index_administrador');
    }

    public function producto_editar_a($id){
        $equipo_a_e = App\Equipo::findOrFail($id);

        return view('users.administrador.productos_editar', compact('equipo_a_e'));

    }

    public function producto_actualizar_a(Request $request, $id){
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

        return redirect()->route('index_administrador');
    }

    public function producto_eliminar_a($id){
        $equipo_a_eliminar = App\Equipo::findOrFail($id);

        $equipo_a_eliminar->delete();

        return back()->with('mensaje', 'Eliminado');
    }

    ////

    public function usuario_a(){
        $usuarios = App\User::paginate(10);

        return view('users.administrador.usuarios', compact('usuarios'));
    }

    public function usuario_editar_a($id){
        $usuario_a_e = App\User::findOrFail($id);

        return view('users.administrador.usuarios_editar', compact('usuario_a_e'));
    }

    public function usuario_actualizar_a(Request $request, $id){
        $usuario_a_actualizar = App\User::findOrFail($id);

        $usuario_a_actualizar->name =$request->name;
        $usuario_a_actualizar->email =$request->email;
        $usuario_a_actualizar->role_id =$request->role_id;
        $usuario_a_actualizar->equipo_id =$request->equipo_id;

        $usuario_a_actualizar->save();

        return redirect()->route('usuario_a');
    }

    public function usuario_eliminar_a($id){
        $usuario_a_eliminar = App\User::findOrFail($id);

        $usuario_a_eliminar->delete();

        return redirect()->route('index_administrador');
    }

}
