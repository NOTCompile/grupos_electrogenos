@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9 border shadow p-4">            
        <div class="form-row">
            <div class="col-md-12 text-warning">
                <h1 style="text-decoration:underline; text-align:center;text-shadow: 3px 3px #0038FF;">NUEVO GRUPO ELECTROGENO</h1>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 bg-danger text-white">
                <h3>DATOS GENERALES</h3>
            </div>
        </div>
        <form action="{{ route('producto_crear_a') }}" method="POST" enctype="multipart/form-data" id="upload">
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
                <div class="form-group col-md-2 text-lg-center">
                <label>Usuario ID</label>                
                <select name="user_id" id="inputState" class="form-control">
                    <option selected disabled value="">Escoga...</option>   
                    @foreach ($users_list as $item)               
                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                    @endforeach                    
                </select>                
                </div>
                <div class="form-group col-md-2 text-lg-center">
                    <label>Codigo</label>
                    <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
                </div>               
                <div class="form-group col-md-8 text-lg-center">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                </div>
            </div>
            <div class="form-row bg-warning">
                    <div class="form-group col-md-7 text-lg-center">
                        <label>Empresa</label>
                        <input type="text" name="empresa" class="form-control" value="{{ old('empresa') }}">
                    </div>
                    <div class="form-group col-md-2 text-lg-center">
                        <label>Periocidad</label>
                        <select name="periocidad" id="inputState" class="form-control">
                            <option selected disabled value="">Escoga...</option>
                            <option text="Anual">Anual</option>
                            <option text="Bimestral">Bimestral</option>
                            <option text="Trimestral">Trimestral</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 text-lg-center  ">
                        <label>Celular</label>
                        <input type="number" name="celular" class="form-control" value="{{ old('celular') }}">
                    </div>
                    
            </div>
            <div class="form-row bg-warning">
                    <div class="form-group col-md-12 text-lg-center">
                        <label>Ubicacion</label>
                        <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion') }}">
                    </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 bg-danger text-white">
                    <h3>DATOS DE EQUIPO</h3>
                </div>
            </div>
            <div class="form-row bg">
                <div class="col-md-6 bg-dark text-white">
                    <h5 class="text-lg-center">Motor</h5>
                </div><div class="col-md-6 bg-dark text-white">
                    <h5 class="text-lg-center">Generador</h5>
                </div>
            </div>   
            <div class="form-row bg-warning">
                <div class="form-group col-md-3 text-lg-center">
                    <label>Marca</label>
                    <input type="text" name="marca_motor" id="" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>Modelo</label>
                    <input type="text" name="modelo_motor" id="" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>Marca</label>
                    <input type="text" name="marca_generador" id="" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>Modelo</label>
                    <input type="text" name="modelo_generador" id="" class="form-control">
                </div>
            </div>   
                <div class="form-row bg-warning">
                    <div class="form-group col-md-3 text-lg-center">
                        <label>N° Serie</label>
                        <input type="text" name="nserie_motor" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3 text-lg-center">
                        <label>Potencia</label>
                        <input type="text" name="potencia_motor" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3 text-lg-center">
                        <label>N° Serie</label>
                        <input type="text" name="nserie_generador" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3 text-lg-center">
                        <label>Potencia</label>
                        <input type="text" name="potencia_generador" id="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 bg-danger text-white">
                        <h3>MANTENIMIENTO</h3>
                    </div>
                </div>
            <div class="form-row bg-warning text-lg-center">
                <div class="form-group col-md-4">
                    <label>Fecha</label>
                    <input type="date" name="fecha" class="form-control" value="{{ old('hora_inicio') }}">
                </div>
                <div class="form-group col-md-4 text-lg-center">
                    <label>Hora de Inicio</label>
                    <input type="time" name="hora_inicio" class="form-control" value="{{ old('hora_inicio') }}">
                </div>
                <div class="form-group col-md-4 text-lg-center">
                    <label>Hora de Finalizacion</label>
                    <input type="time" name="hora_fin" class="form-control" value="{{ old('hora_fin') }}">
                </div>            
            </div>            
            <div class="form-row">
                <div class="col-md-12 bg-danger text-white">
                    <h3>IMAGEN</h3>
                </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-7">
                    <input type="file" name="image_id" class="form-control">
               </div>
            </div>
               
            <div class="form-row">
                <div class="form-group">
                        <a class="btn btn-outline-primary" href="{{ route('producto_a') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
                </div>
            </div>                     
     </form>
        </div>
    </div>
</div>
@endsection