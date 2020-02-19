@extends('layouts.app_secretaria')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_secretaria')
        <div class="col-md-9">
          <div class="container border shadow p-4">
               <div class="row">
                <h3 style="text-decoration:underline; text-align:center"><b>Detalles de {{ $equipo_s->nombre }}</b></h3>
                  </div>
                  <p></p>
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
                      <div class="carousel-item active border">
                        <img class="d-block img-fluid w-100 bg-dark" style="width:200px;height:400px;" src="{{url('https://www.unimaq.com.pe/wp-content/uploads/2019/06/encapsulado-9-5_2.jpg?$cc-s$')}}" alt="">
                      </div>                                   
                         @foreach ($equipo_s->image as $item)                         
                            <div class="carousel-item border">
                              <img class="d-block img-fluid w-100 bg-dark" style="width:200px;height:400px;" src="{{url('/img/image/'.$item->url)}}" alt="">
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
                    <h3>DATOS GENERALES</h3>
                  </div>
                 </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Usuario ID</h6>
                  </div>
                  <div class="col-md-6 border bg-danger text-white">
                    <h6 class="text-center">Nombre</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Codigo</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->user_id }}</h6>
                  </div>
                  <div class="col-md-6 border">
                    <h6 class="lead text-center">{{ $equipo_s->nombre }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->nombre }}</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 border bg-danger text-white">
                    <h6 class="text-center">Empresa:</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Celular:</h6>
                  </div>
                  <div class="col-md-5 border bg-danger text-white">
                    <h6 class="text-center">Periodicidad:</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 border">
                    <h6 class="lead text-center">{{ $equipo_s->empresa }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->celular }}</h6>
                  </div>
                  <div class="col-md-5 border">
                    <h6 class="lead text-center">{{ $equipo_s->periocidad }}</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 border bg-danger text-white">
                    <h6 class="text-center">Ubicacion</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 border">
                    <h6 class="lead text-left">{{ $equipo_s->ubicacion }}</h6>
                  </div>
                </div>
                <P> </P>

                <div class="row">
                  <div class="col-md-12 border bg-dark text-white">
                    <h4>DATOS DEL EQUIPO</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 border bg-success text-white">
                    <h5 class="text-center">MOTOR</h5>
                  </div>
                  <div class="col-md-6 border bg-success text-white">
                    <h5 class="text-center">GENERADOR</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Marca</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Modelo</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Marca</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Modelo</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->marca_motor }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->modelo_motor }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->marca_generador }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->modelo_generador }}</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">N° de Serie</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Potencia</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class=" text-center">N° de Serie</h6>
                  </div>
                  <div class="col-md-3 border bg-danger text-white">
                    <h6 class="text-center">Potencia</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->nserie_motor }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->potencia_motor }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->nserie_generador }}</h6>
                  </div>
                  <div class="col-md-3 border">
                    <h6 class="lead text-center">{{ $equipo_s->potencia_generador }}</h6>
                  </div>
                </div>
                <P></P>

          </div>
        </div>
    </div>
</div>
@endsection