@extends('layouts.app_tecnico')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_tecnico')
        <div class="col-md-9 border shadow">            
          <h1 class="display-5" style="text-align:center"><b><u>Editar Usuario:</u></b> {{ $usuario_t_e->name }}</h1>
          <p> </p>
          <div class="row justify-content-center">
               <div class="col-md-10">
                   <div class="card border shadow">
                              
                       <div class="card-body">
                           <form method="POST" action="{{ route('usuario_actualizar_t', $usuario_t_e->id) }}">
                               @csrf
                                   @method('PUT')
                               <div class="form-group row">
                                   <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
       
                                   <div class="col-md-6">
                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $usuario_t_e->name }}" required autocomplete="name" autofocus>
       
                                       @error('name')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>
       
                               <div class="form-group row">
                                   <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
       
                                   <div class="col-md-6">
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario_t_e->email }}" required autocomplete="email">
       
                                       @error('email')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>       
                               <div class="form-group row">
                                   <label for="inputState" class="col-md-4 col-form-label text-md-right">Tipo de Usuario:</label>
                                   <div class="col-md-6">
                                       <select id="inputState" class="form-control" name="role_id">
                                           <option selected disabled value="">Seleccione...</option>
                                           <option value="4">Cliente</option>
                                       </select>
                                   </div>
                               </div>
       
                               <div class="form-group row">
                                   <label for="inputState" class="col-md-4 col-form-label text-md-right">Grupo Electrogeno:</label>
                                   <div class="col-md-6">
                                        <input type="number" class="form-control" name="equipo_id" value="{{ $usuario_t_e->equipo_id }}">
                                   </div>
                               </div>
       
                               <div class="form-group row mb-0">
                                   <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <p></p>
          </div>

            
        </div>
    </div>
</div>
@endsection