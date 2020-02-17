<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function inicio_imagenes_a(){
        $image_a = App\Image::paginate(10);
        return view('users.administrador.imagen.imagen_lista', compact('image_a'));
    }

    public function imagenes_agregar_a(){
        $users_list = DB::table('equipos')->select('id')->get();
        return view('users.administrador.imagen.imagen_agregar', compact('users_list'));
    }
    
    public function imagenes_crear_a(Request $request){
        $nueva_imagen_a = new App\Image($request->all());

        $url_image = $request->file('url')->getClientOriginalName();
        Image::make($request->file('url'))
            ->save('img/image/'.$url_image);

            $nueva_imagen_a->url = $url_image;

        $nueva_imagen_a->save();
        return redirect()->route('inicio_imagenes_a');
    }
    
    public function imagenes_eliminar_a($id){
        $image_a_eliminar = App\Image::findOrFail($id);

        $rutaAnterior = public_path("/img/image/".$image_a_eliminar->url);
        if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $image_a_eliminar->delete();

        return back();
    }

    ////

    public function inicio_imagenes_t(){
        $image_t = App\Image::paginate(10);
        return view('users.administrador.imagen.imagen_lista', compact('image_t'));
    }

    public function imagenes_agregar_t(){
        $users_list = DB::table('equipos')->select('id')->get();
        return view('users.administrador.imagen.imagen_agregar', compact('users_list'));
    }
    
    public function imagenes_crear_t(Request $request){
        $nueva_imagen_t = new App\Image($request->all());

        $url_image = $request->file('url')->getClientOriginalName();
        Image::make($request->file('url'))
            ->save('img/image/'.$url_image);

            $nueva_imagen_t->url = $url_image;

        $nueva_imagen_t->save();
        return redirect()->route('inicio_imagenes_a');
    }
    
    public function imagenes_eliminar_t($id){
        $image_t_eliminar = App\Image::findOrFail($id);

        $rutaAnterior = public_path("/img/image/".$image_t_eliminar->url);
        if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $image_t_eliminar->delete();

        return back();
    }

}
