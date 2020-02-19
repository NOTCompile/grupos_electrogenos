<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
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
        $users_list = DB::table('users')->select('id','name')->where('role_id','=',4)->get();
        $equipo_t = App\Equipo::findOrFail($id);
        return view('users.tecnico.productos_detalle', compact('equipo_t','users_list'));
    }

    public function producto_agregar_t(){
        $users_list = DB::table('users')->select('id','name')->where('role_id','=',4)->get();
        return view('users.tecnico.productos_agregar', compact('users_list'));
    }

    public function producto_crear_t(Request $request){
        $request->validate([
            'codigo' => 'required',
        ]);

        $nuevo_equipo_t = new App\Equipo;   

        $nuevo_equipo_t->codigo = $request->codigo;        
        $nuevo_equipo_t->nombre = $request->nombre;
        $nuevo_equipo_t->empresa = $request->empresa;
        $nuevo_equipo_t->ubicacion = $request->ubicacion;
        $nuevo_equipo_t->celular = $request->celular;
        $nuevo_equipo_t->fecha = $request->fecha;
        $nuevo_equipo_t->periocidad = $request->periocidad;
        $nuevo_equipo_t->marca_motor = $request->marca_motor;
        $nuevo_equipo_t->modelo_motor = $request->modelo_motor;
        $nuevo_equipo_t->nserie_motor = $request->nserie_motor;
        $nuevo_equipo_t->potencia_motor = $request->potencia_motor;
        $nuevo_equipo_t->marca_generador = $request->marca_generador;
        $nuevo_equipo_t->modelo_generador = $request->modelo_generador;
        $nuevo_equipo_t->nserie_generador = $request->nserie_generador;
        $nuevo_equipo_t->potencia_generador = $request->potencia_generador;
        $nuevo_equipo_t->fecha = $request->fecha;
        $nuevo_equipo_t->hora_inicio = $request->hora_inicio;
        $nuevo_equipo_t->hora_fin = $request->hora_fin;
        $nuevo_equipo_t->user_id = $request->user_id;
        $nuevo_equipo_t->save();


        $nueva_imagen_a = new App\Image;        
        $nombre_image = $request->file('image_id')->getClientOriginalName();
        Image::make($request->file('image_id'))
            ->save('img/image/'.$nombre_image);

        $nueva_imagen_a->url = $nombre_image;
        $nueva_imagen_a->equipo_id = $nuevo_equipo_t->id;
        
        $nuevo_equipo_t->save();

        return redirect()->route('index_tecnico');
    }

    public function producto_editar_t($id){
        $users_list = DB::table('users')->select('id','name')->where('role_id','=',4)->get();
        $equipo_t_e = App\Equipo::findOrFail($id);

        return view('users.tecnico.productos_editar', compact('equipo_t_e', 'users_list'));

    }

    public function producto_actualizar_t(Request $request, $id){
        $equipo_t_actualizar = App\Equipo::findOrFail($id);

        $equipo_t_actualizar->fill($request->all());


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
