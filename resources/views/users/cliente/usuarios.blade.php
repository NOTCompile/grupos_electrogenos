@extends('layouts.app_cliente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_cliente')
        <div class="col-md-9 border shadow p-4">            
          <h1 class="display-5" style="text-decoration:underline; text-align:center"><b>Usuarios</b></h1>
          <p> </p>
          <div class="card border shadow">
               <div class="card-header bg-dark text-white">
                 N° Rol:
               </div>
               <div class="card-body">
                 <p class="card-text mb-0"><b>Administrador:</b> 1</p>
                 <p class="card-text mb-0"><b>Tecnico:</b> 2</p>
                 <p class="card-text mb-0"><b>Secretaria:</b> 3</p>
                 <p class="card-text mb-0"><b>Cliente:</b> 4</p>
               </div>
             </div>
             <p></p>
          <div class="table-responsive">
          <table class="table table-sm table-bordered">
               <thead class="thead-dark">
               <tr>
                    <th class="text-center border border-dark">ID</th>
                    <th class="text-center border border-dark">Nombre</th>
                    <th class="text-center border border-dark">Email</th>
                    <th class="text-center border border-dark">Rol</th>
                    <th class="text-center border border-dark">Equipo ID</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($usuarios_c as $item)
               <tr class="table-info">
                    <td class="border border-dark text-center">{{ $item->id }}</td>
                    <td class="border border-dark text-left">{{ $item->name }}</td>
                    <td class="border border-dark text-left">{{ $item->email }}</td>                    
                    <td class="border border-dark text-center">{{$item->role_id}}</td>
                    <td class="border border-dark text-center">{{$item->equipo_id}}</td>
               </tr>
               <tr></tr>
               @endforeach()   
               </tbody>
          </table>
          </div>

          {{ $usuarios_c->links() }}      
        </div>
    </div>
</div>
@endsection