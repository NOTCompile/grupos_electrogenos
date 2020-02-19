@extends('layouts.app_tecnico')

@section('content')

<div class="container">
     <div class="row justify-content-center">
         @include('menu_tecnico')
          <div class="col-md-9 border shadow p-4">
               <a href="{{ route('imagenes_agregar_t') }}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Nueva Imagen</a>
               <p></p> 
               <div class="table-responsive">
                    <table class="table table-sm table-responsive">
                         <thead class="thead-dark">
                              <tr>
                                   <th class="text-center border border-dark">ID</th>
                                   <th class="text-center border border-dark">Nombre</th>
                                   <th class="text-center border border-dark">Url</th>
                                   <th class="text-center border border-dark">Equipo ID</th>
                                   <th class="text-center border border-dark">Acciones</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($image_t as $item)
                                  <tr class="table-info">
                                       <td class="border border-dark text-center">{{ $item->id }}</td>
                                       <td class="border border-dark text-center">{{ $item->nombre }}</td>
                                       <td class="border border-dark text-center">{{ $item->url }}</td>
                                       <td class="border border-dark text-center">{{ $item->equipo_id }}</td>
                                       <td class="border text-center border-dark">
                                        <div> 
                                             <form action="{{ route('imagenes_eliminar_t', $item) }}" method="POST" class="d-inline">
                                             @method('DELETE')
                                             @csrf
                                             <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </div>
                                        </td>
                                  </tr>     
                              @endforeach()
                         </tbody>
                    </table>
               </div>
               {{ $image_t->links() }}
          </div>
     </div>
</div>
@endsection