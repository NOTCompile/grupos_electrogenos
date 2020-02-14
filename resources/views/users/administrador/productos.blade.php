@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9 border shadow p-4">            
          <h1 class="display-5" style="text-decoration:underline; text-align:center"><b>Grupos Electrogenos</b></h1>
               <div class="text-center"><a class="btn btn-outline-primary" href="{{ route('producto_agregar_a') }}"><i class="fa fa-plus-circle"></i> Nuevo Grupo</a></div>
          <p> </p>
          <div class="table-responsive">
          <table class="table table-sm table-bordered">
               <thead class="thead-dark">
               <tr>
                    <th class="text-center border border-dark">ID</th>
                    <th class="text-center border border-dark">Codigo</th>
                    <th class="text-center border border-dark">Nombre</th>
                    <th class="text-center border border-dark">Empresa</th>
                    <th class="text-center border border-dark">Usuario ID</th>
                    <th class="text-center border border-dark">Acciones</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($equipos_a as $item)
               <tr class="table-info">
                    <td class="border border-dark text-center">{{ $item->id }}</td>                    
                    <th class="border border-dark text-center"><a href="{{ route('producto_detalle_a', $item) }}">
                         {{ $item->codigo }}
                    </a></th>
                    <td class="border border-dark text-left">{{ $item->nombre }}</td>
                    <td class="border border-dark text-left">{{$item->empresa}}</td>
                    <td class="border border-dark text-center">{{$item->user_id}}</td>
                    <td class="border text-center border-dark">
                    <div> 
                         <a href="{{ route('producto_editar_a', $item) }}" class="btn btn-outline-warning"><i class="fa fa-pencil"></i></a> 
                         <form action="{{ route('producto_eliminar_a', $item) }}" method="POST" class="d-inline">
                         @method('DELETE')
                         @csrf
                         <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                    </td>
               </tr>
               <tr></tr>
               @endforeach()   
               </tbody>
          </table>
          </div>

          {{ $equipos_a->links() }}      
        </div>
    </div>
</div>
@endsection