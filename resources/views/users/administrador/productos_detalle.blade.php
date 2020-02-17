@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9">
          <div class="container border shadow p-4">
               <div class="row">
                <h1 class="display-5" style="text-decoration:underline; text-align:center"><b>Detalles de {{ $equipo_a->nombre }}</b></h1>
                  </div>
                  <p> </p>

               <div class="row">
                 <div class="col-md-12">                   
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                    </ol>
                    <div class="carousel-inner">                         
                         @foreach ($equipo_a->image as $item)
                            <div class="carousel-item">
                              <img class="d-block img-fluid w-100 bg-dark" style="width:200px;height:400px;" src="{{ url($item->url)  }}">
                            </div>
                         @endforeach                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
               </div>
               <p></p>
               <div class="container">
                 <div class="row">
                  <div class="col-md-12 border bg-dark text-white">
                    <p class="lead text-left"><h4>DATOS GENERALES</h4></p>
                  </div>
                 </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Usuario ID</p>
                  </div>
                  <div class="col-md-6 border bg-danger text-white">
                    <p class="lead text-lg-center">Nombre</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Codigo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->user_id }}</p>
                  </div>
                  <div class="col-md-6 border">
                    <p class="lead text-lg-center">{{ $equipo_a->nombre }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->nombre }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 border bg-danger text-white">
                    <p class="lead text-lg-center">Empresa:</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Celular:</p>
                  </div>
                  <div class="col-md-5 border bg-danger text-white">
                    <p class="lead text-lg-center">Periodicidad:</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 border">
                    <p class="lead text-lg-center">{{ $equipo_a->empresa }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->celular }}</p>
                  </div>
                  <div class="col-md-5 border">
                    <p class="lead text-lg-center">{{ $equipo_a->periocidad }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 border bg-danger text-white">
                    <p class="lead text-lg-center">Ubicacion</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 border">
                    <p class="lead text-lg-left">{{ $equipo_a->ubicacion }}</p>
                  </div>
                </div>
                <P> </P>
                <div class="row">
                  <div class="col-md-12 border bg-dark text-white">
                    <p class="lead text-left"><h4>DATOS DEL EQUIPO</h4></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 border bg-warning text-white">
                    <p class="lead text-lg-center"><strong>MOTOR</strong></p>
                  </div>
                  <div class="col-md-6 border bg-warning text-white">
                    <p class="lead text-lg-center"><strong>GENERADOR</strong></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Marca</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Modelo</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Marca</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Modelo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->marca_motor }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->modelo_motor }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->marca_generador }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->modelo_generador }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">N° de Serie</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Potencia</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">N° de Serie</p>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <p class="lead text-lg-center">Potencia</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->nserie_motor }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->potencia_motor }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->nserie_generador }}</p>
                  </div>
                  <div class="col-md-3 border">
                    <p class="lead text-lg-center">{{ $equipo_a->potencia_generador }}</p>
                  </div>
                </div>
                <P></P>
               </div>
                  <div class="form-row col-md-12">
                    <div class="btn-group btn-group-block" role="group">
                        <button href="" type="button" class="btn btn-primary text-white">Checklist De Operatividad</button>
                        <button href="" type="button" class="btn btn-primary text-white">Checklist De MTTO</button>
                        <button href="" type="button" class="btn btn-primary text-white">Pruebas Electromecanicas</button>
                    </div>
                  </div>
                  <p></p>
                  </div>
                
     
          </div>
        </div>
    </div>
</div>
@endsection