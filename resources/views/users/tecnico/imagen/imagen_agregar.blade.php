@extends('layouts.app_administrador')

@section('content')

<div class="container">
     <div class="row justify-content-center">
         @include('menu_administrador')
          <div class="col-md-9 border shadow p-4">
               <div class="form-row">
                    <div class="col-md-12 bg-danger text-white">
                        <h3>DATOS GENERALES</h3>
                    </div>
                </div>
                <form action="{{ route('imagenes_crear_t') }}" method="POST" enctype="multipart/form-data" id="upload">
                  @csrf
                  @error('codigo')
                       <div class="alert alert-danger">
                            El codigo del producto es obligatorio.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                  @enderror
                            
                    <div class="form-row bg-warning">
                         <div class="form-group col-md-10 text-lg-center">
                              <label>Nombre</label>
                              <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                         </div>
                        <div class="form-group col-md-2 text-lg-center">
                        <label>Equipo ID</label>                
                        <select name="equipo_id" id="inputState" class="form-control">
                            <option selected disabled value="">Escoga...</option>   
                            @foreach ($users_list as $item)               
                                <option value="{{ $item->id }}">{{ $item->id }}</option>
                            @endforeach                    
                        </select>                
                        </div>
                                      
                        <div class="form-group col-md-8 text-lg-center">
                            <label>Imagen</label>
                            <input type="file" name="url" class="form-control" value="{{ old('nombre') }}">
                        </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group">
                                 <a class="btn btn-outline-primary" href="{{ route('inicio_imagenes_t') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
                                 <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
                         </div>
                     </div>  
          </div>
     </div>
</div>
@endsection