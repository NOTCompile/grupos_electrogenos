@extends('layouts.app_secretaria')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_secretaria')
        <div class="col-md-9 border shadow p-4">            
          <h1 class="display-5" style="text-decoration:underline; text-align:center"><b>Grupos Electrogenos</b></h1>
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
               </tr>
               </thead>
               <tbody>
               @foreach ($equipos_s as $item)
               <tr class="table-info">
                    <td class="border border-dark text-center">{{ $item->id }}</td>                    
                    <th class="border border-dark text-center"><a href="{{ route('producto_detalle_s', $item) }}">
                         {{ $item->codigo }}
                    </a></th>
                    <td class="border border-dark text-left">{{ $item->nombre }}</td>
                    <td class="border border-dark text-left">{{$item->empresa}}</td>
                    <td class="border border-dark text-center">{{$item->user_id}}</td>
               </tr>
               <tr></tr>
               @endforeach()   
               </tbody>
          </table>
          </div>

          {{ $equipos_s->links() }}      
        </div>
    </div>
</div>
@endsection