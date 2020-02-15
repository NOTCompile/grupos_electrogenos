<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function index()
    {
        $imagen=Imagen::orderBy('id')->get();        
        return view('admin.fotos.index',compact('fotos'));
    }

    public function create()
    {
        return view('admin.fotos.create');
    }
 
    public function store(Request $request)
    {
        $foto    =   new fotos($request->all());
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){
                $urlfoto        = $request->file('urlfoto');            
                $nombreurlfoto  = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/fotos/'.$nombreurlfoto);            
                Image::make($urlfoto->getRealPath())
                    ->resize(800, null, function ($constraint) { $constraint->aspectRatio(); })
                    ->save($ruta);
                $foto->urlfoto      =   $nombreurlfoto; 
            }            
            ///////////// FIN IMAGEN
        $foto->save();            
        return redirect('/admin/fotos')->withSuccessMessage("Se ha creado correctamente");
    }

  
    public function edit($id)
    {
        $foto=fotos::findOrFail($id);
        return view('admin.fotos.edit',compact('foto'));
    }

   
    public function update(Request $request, $id)
    {
        $foto =fotos::findOrFail($id);
        $urlfotoanterior      =   $foto->urlfoto;
        $foto->fill($request->all());
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){
                $urlfoto        = $request->file('urlfoto');            
                $nombreurlfoto  = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/fotos/'.$nombreurlfoto);            
                Image::make($urlfoto->getRealPath())
                    ->resize(800, null, function ($constraint) { $constraint->aspectRatio(); })
                    ->save($ruta);
                $rutaAnterior = public_path("/img/fotos/".$urlfotoanterior);
                if (file_exists($rutaAnterior))
                    unlink (realpath($rutaAnterior));
                $foto->urlfoto      =   $nombreurlfoto; 
            }            
            ///////////// FIN IMAGEN
        $foto->save();            
        return redirect()->back()->withSuccessMessage("Se ha actualizado correctamente");
    }

    public function destroy($id)
    {
        $foto=fotos::findOrFail($id);
        $rutaAnterior = public_path("/img/fotos/".$foto->urlfoto);
        if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $foto->delete();
        return redirect()->route('admin.fotos.index');
    }
}
