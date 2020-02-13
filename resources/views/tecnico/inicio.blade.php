@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9">            
            <div class="card">
                <div class="card-header">¡Mensaje!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center">Bienvenido al Sistema de Almacenamiento</h1>
                    <br>
                    <a href="" class="btn btn-success">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection