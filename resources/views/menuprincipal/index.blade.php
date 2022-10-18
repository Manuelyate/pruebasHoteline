@extends('index')

@section('content')
<h5 class="text-center">MENU PRINCIPAL</h5>
<div class="container">
  <div class="row">
    <div class="col">  
     <div class="card" style="width: 10rem;">
     <img src="/imagenes/tocarema.jpg" class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title">HOTEL TOCAREMA</h5>
      <p class="card-text">Cra. 5 #19-41, Girardot Cundinamarca</p>
      <a href="servicios" class="btn btn-primary">Servicios</a>
    </div>
  </div>
    </div>
  <div class="col">
  <div class="card" style="width: 10rem;">
    <img src="/imagenes/union.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">HOTEL UNION</h5>
      <p class="card-text"> Cra. 12 #17-3, Girardot Cundinamarca</p>
      <a href="servicios" class="btn btn-primary">Servicios</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card" style="width: 10rem;">
      <img src="/imagenes/resort.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">HOTEL GIRARDOT RESORT</h6>
        <p class="card-text"> kilometro 1 via girardot-ricaurte, Girardot Cundinamarca</p>
        <a href="servicios" class="btn btn-primary">Servicios</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card" style="width: 10rem;">
        <img src="/imagenes/puentes.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">HOTEL GIRARDOT LOS PUENTES</h6>
          <p class="card-text"> Cra. 12 #15-03, Girardot, Cundinamarca</p>
          <a href="servicios" class="btn btn-primary">Servicios</a>
        </div>
      </div>
      </div>
  </div>
</div>

@endsection