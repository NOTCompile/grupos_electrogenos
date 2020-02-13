@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9 border shadow">            
          <h3 class="display-4">Grupos Electrogenos</h3>
               <a class="btn btn-outline-primary" href="{{ route('producto_agregar') }}">Agregar Nuevo Grupo</a>
          <p> </p>
          <div class="table-responsive">
          <table class="table table-bordered">
               <thead class="thead-dark">
               <tr>
                    <th class="text-center border border-dark">Codigo</th>
                    <th class="text-center border border-dark">Grupo Electrogeno</th>
                    <th class="text-center border border-dark">Empresa</th>
                    <th class="text-center border border-dark">Ubicación</th>
                    <th class="text-center border border-dark">Acciones</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($item_equipo as $item)
               <tr class="table-info">
                    <td class="border border-dark text-left">{{ $item->codigo }}</td>
                    <th class="border border-dark text-left"><a href="{{ route('productos_detalle', $item) }}">
                         {{ $item->nombre }}
                    </a></th>
                    <td class="border border-dark text-left">{{$item->empresa}}</td>
                    <td class="border border-dark text-left">{{$item->ubicacion}}</td>
                    <td class="border text-center border-dark">
                    <div class="btn-group"> <a href="{{ route('producto.producto_editar', $item) }}" class="btn btn-outline-warning">EDITAR</a> 
                         <form action="{{ route('producto.producto_eliminar', $item) }}" method="POST" class="d-inline">
                         @method('DELETE')
                         @csrf
                         <button  class="btn btn-outline-danger" type="submit">ELIMINAR</button> </div>
                    </td>
               </tr>
               <tr></tr>
               @endforeach()   
               </tbody>
          </table>
          </div>

          {{ $item_equipo->links() }}      
        </div>
    </div>
</div>
@endsection