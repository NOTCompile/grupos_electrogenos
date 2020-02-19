@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9 border shadow p-4">            
            <h1 class="display-5" style="text-align:center"><b><u>Editar Producto:</u></b> {{ $equipo_a_e->nombre }}</h1>
            <p> </p>
        <form action="{{ route('producto_actualizar_a', $equipo_a_e->id) }}" method="POST" enctype="multipart/form-data" id="upload">
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
                    
          <div class="form-row bg-warning">
            <div class="form-group col-md-3 text-lg-center">
            <label>Usuario</label>                
            <select name="user_id" id="inputState" class="form-control">
                <option selected disabled value="">{{ $equipo_a_e->user_id  }}</option>   
                @foreach ($users_list as $item)               
                    <option value="{{ $item->id }}">{{ $item->id }}. {{ $item->name }}</option>
                @endforeach                    
            </select>                
            </div>
            <div class="form-group col-md-2 text-lg-center">
                <label>Codigo</label>
                <input type="text" name="codigo" class="form-control" value="{{ $equipo_a_e->codigo }}">
            </div>               
            <div class="form-group col-md-7 text-lg-center">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $equipo_a_e->nombre }}">
            </div>
        </div>
        <div class="form-row bg-warning">
                <div class="form-group col-md-7 text-lg-center">
                    <label>Empresa</label>
                    <input type="text" name="empresa" class="form-control" value="{{ $equipo_a_e->empresa }}">
                </div>
                <div class="form-group col-md-2 text-lg-center">
                    <label>Periocidad</label>
                    <select name="periocidad" id="inputState" class="form-control">
                        <option selected disabled value="">{{ $equipo_a_e->periocidad  }}</option>
                        <option text="Anual">Anual</option>
                        <option text="Bimestral">Bimestral</option>
                        <option text="Trimestral">Trimestral</option>
                    </select>
                </div>
                <div class="form-group col-md-3 text-lg-center  ">
                    <label>Celular</label>
                    <input type="number" name="celular" class="form-control" value="{{ $equipo_a_e->celular  }}">
                </div>
                
        </div>
        <div class="form-row bg-warning">
                <div class="form-group col-md-12 text-lg-center">
                    <label>Ubicacion</label>
                    <input type="text" name="ubicacion" class="form-control" value="{{ $equipo_a_e->ubicacion }}">
                </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 bg-danger text-white">
                <h3>DATOS DE EQUIPO</h3>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 bg-dark text-white">
                <h5 class="text-lg-center">Motor</h5>
            </div><div class="col-md-6 bg-dark text-white">
                <h5 class="text-lg-center">Generador</h5>
            </div>
        </div>   
        <div class="form-row bg-warning">
            <div class="form-group col-md-3 text-lg-center">
                <label>Marca</label>
                <input type="text" name="marca_motor" id="" value="{{  $equipo_a_e->marca_motor  }}" class="form-control">
            </div>
            <div class="form-group col-md-3 text-lg-center">
                <label>Modelo</label>
                <input type="text" name="modelo_motor" id="" value="{{  $equipo_a_e->modelo_motor  }}" class="form-control">
            </div>
            <div class="form-group col-md-3 text-lg-center">
                <label>Marca</label>
                <input type="text" name="marca_generador" id="" value="{{  $equipo_a_e->marca_generador  }}" class="form-control">
            </div>
            <div class="form-group col-md-3 text-lg-center">
                <label>Modelo</label>
                <input type="text" name="modelo_generador" id="" value="{{  $equipo_a_e->modelo_generador  }}" class="form-control">
            </div>
        </div>   
            <div class="form-row bg-warning">
                <div class="form-group col-md-3 text-lg-center">
                    <label>N° Serie</label>
                    <input type="text" name="nserie_motor" id="" value="{{  $equipo_a_e->nserie_motor  }}" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>Potencia</label>
                    <input type="text" name="potencia_motor" id="" value="{{  $equipo_a_e->potencia_motor  }}" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>N° Serie</label>
                    <input type="text" name="nserie_generador" id="" value="{{  $equipo_a_e->nserie_generador  }}" class="form-control">
                </div>
                <div class="form-group col-md-3 text-lg-center">
                    <label>Potencia</label>
                    <input type="text" name="potencia_generador" id="" value="{{  $equipo_a_e->potencia_generador  }}" class="form-control">
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
                    <input type="date" name="fecha" class="form-control" value="{{  $equipo_a_e->fecha  }}">
                </div>
                <div class="form-group col-md-4 text-lg-center">
                    <label>Hora de Inicio</label>
                    <input type="time" name="hora_inicio" class="form-control" value="{{  $equipo_a_e->hora_inicio  }}">
                </div>
                <div class="form-group col-md-4 text-lg-center">
                    <label>Hora de Finalizacion</label>
                    <input type="time" name="hora_fin" class="form-control" value="{{  $equipo_a_e->hora_fin  }}">
                </div>            
            </div>
            <div class="form-row">
                <div class="col-md-12 bg-success text-white">
                    <h3>INFORMACION ADICIONAL</h3>
                </div>
            </div>        
            <div class="form-row">
                <div class="col-md-3 bg-white text-dark text-lg-right">
                    <h5>IMAGENES</h5>
                </div>
                <div class="col-md-9">
                    <a href="{{ route('inicio_imagenes_a') }}" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Imagenes</a>
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
</div>
@endsection