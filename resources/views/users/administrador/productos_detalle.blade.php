@extends('layouts.app_administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu_administrador')
        <div class="col-md-9">            
          <div class="container" >
               <div class="row">
                    <p class="lead text-left" >Detalles de {{ $producto->nombre_producto }}</p>
                  </div>
                  
                  <div class="row">
                    <a class="btn btn-outline-primary" href="{{ route('Producto') }}"><i class="fa fa-arrow-circle-o-left"></i>&nbsp;Volver</a>  
                  </div>
                  <p></p>
               <div class="row border border-shadow-lg">
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
                         <div class="carousel-item active">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('https://www.mundiario.com/media/mundiario/images/2018/09/04/2018090422114048856.jpg')  }}" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto .'.'. $producto->imagen_producto)  }}" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Third slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Fourth slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Fifth slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Sixth slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Seventh slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Eighth slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Ninth slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block img-fluid w-100" style="width:200px;height:400px;" src="{{ url('img/productos/' . $producto->codigo_producto . '.png')  }}" alt="Tenth slide">
                         </div>
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
               <div class="container">    
                    <p></p>           
                    <div class="row align-items-center">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Codigo:</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->codigo_producto }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Empresa:</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->empresa_producto }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Ubicacion:</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->ubicacion_producto }} años</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Periocidad:</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->periocidad_producto }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Tipo de Producto:</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->tipo_producto }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 border border-dark">
                        <p class="lead text-left">Celular</p>
                      </div>
                      <div class="col-md-10 border border-dark">
                        <p class="lead text-left">{{ $producto->celular_producto }}</p>
                      </div>
                    </div>
                    <div class="row">
                         <div class="col-md-3 border border-dark">
                           <p class="lead text-left">Hora de Inicio del Mantenimiento</p>
                         </div>
                         <div class="col-md-9 border border-dark">
                           <p class="lead text-left">{{ $producto->hora_inicio_producto }}</p>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-3 border border-dark">
                              <p class="lead text-left">Hora de Finalizacion del Mantenimeinto</p>
                         </div>
                         <div class="col-md-9 border border-dark">
                              <p class="lead text-left">{{ $producto->hora_fin_producto }}</p>
                         </div>
                    </div>
                  </div>
                
     
          </div>
        </div>
    </div>
</div>
@endsection