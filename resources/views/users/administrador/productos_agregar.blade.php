@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9 border shadow">            
            <h1>NUEVO GRUPO ELECTROGENO</h1>
        <form action="{{-- route('producto.producto_crear') --}}" method="POST" enctype="multipart/form-data" id="upload">
          @csrf
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
                    <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
               </div>
               
               <div class="form-group col-md-6">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
               </div>
               <div class="form-group col-md-4">
                    <label for="">Empresa: </label>
                    <input type="text" name="empresa" class="form-control" value="{{ old('empresa') }}" text="hola">
               </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Ubicacion: </label>
                    <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion_producto') }}">
                </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Celular: </label>
                    <input type="number" name="celular" class="form-control" value="{{ old('celular_producto') }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Periocidad</label>
                    <select name="periocidad_producto" id="inputState" class="form-control">
                         <option selected disabled value="">Selecciona...</option>
                         <option text="Anual">Anual</option>
                         <option text="Bimestral">Bimestral</option>
                         <option text="Trimestral">Trimestral</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tipo de Producto: </label>
                    <select name="tipo_producto" id="inputState" class="form-control">
                         <option selected disabled value="">Selecciona...</option>
                         <option text="Motor">Motor</option>
                         <option text="Generador">Generador</option>
                         <option text="Motor y Generador">Motor y Generador</option>
                    </select>
               </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
                <label><h2>Motor</h2></label>
            </div>
          </div>      
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Marca:</label>
                    <input type="text" name="marca_motor" id="" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo:</label>
                    <input type="text" name="modelo_motor" id="" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">N° Serie:</label>
                    <input type="text" name="nserie_motor" id="" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Potencia:</label>
                    <input type="text" name="potencia_generador" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label><h2>Generador</h2></label>
                </div>
              </div>      
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Marca:</label>
                        <input type="text" name="marca_motor" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Modelo:</label>
                        <input type="text" name="modelo_motor" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">N° Serie:</label>
                        <input type="text" name="nserie_motor" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Potencia:</label>
                        <input type="text" name="potencia_generador" id="" class="form-control">
                    </div>
                </div>
            <div class="form-row">
                   <div class="form-group col-md-12">
                       <label><h4>Hora</h4></label>
                   </div>
            </div>  
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Hora de Inicio del Mantenimiento:</label>
                <input type="time" name="hora_inicio_producto" class="form-control" value="{{ old('hora_inicio_producto') }}">
           </div>
           <div class="form-group col-md-6">
                <label for="">Hora de Finalizacion del Mantenimiento:</label>
                <input type="time" name="hora_fin_producto" class="form-control" value="{{ old('hora_fin_producto') }}">
           </div>
          </div>
          <div class="form-row">
               <div class="form-group col-md-12">
                    <label for="">Imagen:</label>
                    <div class="input-group control-group increment" >
                         <input type="file" name="imagen_producto" class="form-control">
                              <div class="input-group-btn"> 
                                   <button class="btn btn-success" type="button"><i class="fa fa-plus"></i> Agregar</button>
                              </div>
                    </div>
                    <div class="clone hide">
                         <div class="control-group input-group" style="margin-top:10px">
                              <input type="file" name="imagen_producto" class="form-control">
                                   <div class="input-group-btn"> 
                                        <button class="btn btn-danger" type="button"><i class="fa fa-times"></i> Remove</button>
                                   </div>
                         </div>
                    </div>
               </div>
          </div>
               
          <div class="form-row">
               <div class="form-group">
                    <a class="btn btn-outline-primary" href="{{ route('administrador_producto') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver </a>
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
               </div>
          </div>
          
          <script type="text/javascript">
               $(document).ready(function() {
           
               $(".btn-success").click(function(){ 
                    var html = $(".clone").html();
                    $(".increment").after(html);
               });
          
               $("body").on("click",".btn-danger",function(){ 
                    $(this).parents(".control-group").remove();
               });
      
          });
               
           
           </script>
           
     </form>
        </div>
    </div>
</div>
@endsection