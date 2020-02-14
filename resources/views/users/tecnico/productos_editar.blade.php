@extends('layouts.app_tecnico')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_tecnico')
        <div class="col-md-9 border shadow">            
            <h1 class="display-5" style="text-align:center"><b><u>Editar Producto:</u></b> {{ $equipo_t_e->nombre }}</h1>
            <p> </p>
        <form action="{{ route('producto_actualizar_t', $equipo_t_e->id) }}" method="POST" enctype="multipart/form-data" id="upload">
          @csrf
          @method('PUT')
          @error('codigo')
               <div class="alert alert-danger">
                    El codigo del producto es obligatorio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          @enderror
                    
          <div class="form-row">
               <div class="form-group col-md-2">
                    <label for="">Codigo: </label>
                    <input type="text" name="codigo" class="form-control" value="{{ $equipo_t_e->codigo }}">
               </div>
               
               <div class="form-group col-md-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" class="form-control" value="{{ $equipo_t_e->nombre}}">
               </div>
               <div class="form-group col-md-4">
                    <label for="">Empresa: </label>
                    <input type="text" name="empresa" class="form-control" value="{{ $equipo_t_e->empresa }}" text="hola">
               </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Ubicacion: </label>
                    <input type="text" name="ubicacion" class="form-control" value="{{ $equipo_t_e->ubicacion }}">
                </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Celular: </label>
                    <input type="number" name="celular" class="form-control" value="{{ $equipo_t_e->celular }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Periocidad</label>
                    <select name="periocidad" id="inputState" class="form-control">
                         <option selected disabled value="">Selecciona...</option>
                         <option text="Anual">Anual</option>
                         <option text="Bimestral">Bimestral</option>
                         <option text="Trimestral">Trimestral</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tipo de Producto: </label>
                    <select name="tipo_producto" id="button" class="form-control">
                         <option selected disabled value="" >Selecciona...</option>
                         <option text="Motor">Motor</option>
                         <option text="Generador">Generador</option>
                         <option text="Motor y Generador">Motor y Generador</option>
                    </select>
               </div>
          </div>
          <div class="form-row" id="Motor">
            <div class="form-group col-md-12">
                <label><h2>Motor</h2></label>
            </div>
          </div>      
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Marca:</label>
                    <input type="text" name="marca_motor" id="" class="form-control" value="{{ $equipo_t_e->marca_motor }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo:</label>
                    <input type="text" name="modelo_motor" id="" class="form-control" value="{{ $equipo_t_e->modelo_motor }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">N° Serie:</label>
                    <input type="text" name="nserie_motor" id="" class="form-control" value="{{ $equipo_t_e->nserie_motor }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Potencia:</label>
                    <input type="text" name="potencia_motor" id="" class="form-control" value="{{ $equipo_t_e->potencia_motor }}">
                </div>
            </div>
            <div class="form-row" id="Generador">
                <div class="form-group col-md-12">
                    <label><h2>Generador</h2></label>
                </div>
              </div>      
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Marca:</label>
                        <input type="text" name="marca_generador" id="" class="form-control" value="{{ $equipo_t_e->marca_generador}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Modelo:</label>
                        <input type="text" name="modelo_generador" id="" class="form-control" value="{{ $equipo_t_e->modelo_generador }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">N° Serie:</label>
                        <input type="text" name="nserie_generador" id="" class="form-control" value="{{ $equipo_t_e->nserie_generador }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Potencia:</label>
                        <input type="text" name="potencia_generador" id="" class="form-control" value="{{ $equipo_t_e->potencia_generador }}">
                    </div>
                </div>
            <div class="form-row">
                   <div class="form-group col-md-12">
                       <label><h2>Hora</h2></label>
                   </div>
            </div>  
            <div class="form-row">
               <div class="form-group col-md-4">
                   <label for="">Hora de Inicio del Mantenimiento:</label>
                   <input type="time" name="hora_inicio" class="form-control" value="{{ $equipo_t_e->hora_inicio }}">
              </div>
              <div class="form-group col-md-4">
                   <label for="">Hora de Finalizacion del Mantenimiento:</label>
                   <input type="time" name="hora_fin" class="form-control" value="{{ $equipo_t_e->hora_fin }}">
              </div>
              <div class="form-group col-md-4">
               <label for="">Conexion con Usuario(Cliente) encargado:</label>
               <input type="number" name="user_id" class="form-control" value="{{ $equipo_t_e->user_id }}">
          </div>
             </div>
          {{--<div class="form-row">
               <div class="form-group col-md-12">
                    <label for="">Imagen:</label>
                    <div class="input-group control-group increment" >
                         <input type="file" name="imagen" class="form-control">
                              <div class="input-group-btn"> 
                                   <button class="btn btn-success" type="button"><i class="fa fa-plus"></i> Agregar</button>
                              </div>
                    </div>
                    
               </div>
          </div>--}}
               
          <div class="form-row">
               <div class="form-group">
                    <a class="btn btn-outline-primary" href="{{ route('producto_t') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
               </div>
          </div>
                     
     </form>
        </div>    
        </div>
    </div>
</div>
@endsection