@extends('layouts.app_cliente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_cliente')
        <div class="col-md-9">            
            <div class="card border shadow">
                <div class="card-header bg-danger text-white">¡Mensaje!</div>

                <div class="card-body bg-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center">Bienvenido al Sistema de Almacenamiento</h1>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection