<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

class TecnicoController extends Controller
{
    public function index_tecnico(){
        return view('inicio_tecnico');
    }

    public function producto_t(){
        $equipos_t = App\Equipo::paginate(10);
        return view('users.tecnico.productos',compact('equipos_t'));
    }

    public function producto_detalle_t($id){
        $equipo_t = App\Equipo::findOrFail($id);
        return view('users.tecnico.productos_detalle', compact('equipo_t'));
    }

    public function producto_agregar_t(){
        return view('users.tecnico.productos_agregar');
    }

    public function producto_crear_t(Request $request){
        $request->validate([
            'codigo' => 'required',
        ]);

        $nuevo_equipo_t = new App\Equipo($request->all());
        $nuevo_equipo_t->save();

        return redirect()->route('index_tecnico');
    }

    public function producto_editar_t($id){
        $equipo_t_e = App\Equipo::findOrFail($id);

        return view('users.tecnico.productos_editar', compact('equipo_t_e'));

    }

    public function producto_actualizar_t(Request $request, $id){
        $equipo_t_actualizar = App\Equipo::findOrFail($id);

        $equipo_t_actualizar->codigo = $request->codigo;        
        $equipo_t_actualizar->nombre = $request->nombre;
        $equipo_t_actualizar->empresa = $request->empresa;
        $equipo_t_actualizar->ubicacion = $request->ubicacion;
        $equipo_t_actualizar->celular = $request->celular;
        $equipo_t_actualizar->periocidad = $request->periocidad;
        $equipo_t_actualizar->tipo_producto = $request->tipo_producto;
        $equipo_t_actualizar->marca_motor = $request->marca_motor;
        $equipo_t_actualizar->modelo_motor = $request->modelo_motor;
        $equipo_t_actualizar->nserie_motor = $request->nserie_motor;
        $equipo_t_actualizar->potencia_motor = $request->potencia_motor;
        $equipo_t_actualizar->marca_generador = $request->marca_generador;
        $equipo_t_actualizar->modelo_generador = $request->modelo_generador;
        $equipo_t_actualizar->nserie_generador = $request->nserie_generador;
        $equipo_t_actualizar->potencia_generador = $request->potencia_generador;
        $equipo_t_actualizar->hora_inicio = $request->hora_inicio;
        $equipo_t_actualizar->hora_fin = $request->hora_fin;
        $equipo_t_actualizar->user_id = $request->user_id;


        $equipo_t_actualizar->save();

        return redirect()->route('index_tecnico');
    }

/////

    public function usuario_t(){
        $usuarios_t = App\User::paginate(10);

        return view('users.tecnico.usuarios', compact('usuarios_t'));
    }

    public function usuario_editar_t($id){
        $usuario_t_e = App\User::findOrFail($id);

        return view('users.tecnico.usuarios_editar', compact('usuario_t_e'));
    }

    public function usuario_actualizar_t(Request $request, $id){
        $usuario_t_actualizar = App\User::findOrFail($id);

        $usuario_t_actualizar->name =$request->name;
        $usuario_t_actualizar->email =$request->email;
        $usuario_t_actualizar->role_id =$request->role_id;
        $usuario_t_actualizar->equipo_id =$request->equipo_id;

        $usuario_t_actualizar->save();

        return redirect()->route('usuario_t');
    }

}
