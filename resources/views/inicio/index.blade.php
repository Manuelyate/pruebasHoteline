@extends('index')
@section('content')

      <!---CARROUSEL --->

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{ asset('storage/bedroom-g4a22a43d4_640.jpg') }}" class="d-block w-100" alt="Slider1">
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('storage/bedroom-gaf1ab529c_640.jpg')}}" class="d-block w-100" alt="Slider2">
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('storage/water-g7dc9d6b2b_640.jpg')}}" class="d-block w-100" alt="Slider3">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- TERMINA EL CORROUSEL -->

      <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Una plataforma unica para tus necesidades de<span class="text-primary"> Servicios</span></h1>
        <p class="p-3 fs-4"><span class="text-primary">HOTELINE</span> Es la plataforma donde te ayudamos a gestionar los procesos de reservas turisticas</p>
      </section>

      <section class="container-fluid">
       <div class="row w-75 mx-auto my-5 servicio-fila">
         <div class="col-lg-6 col-md-12 col-sm-12">
           <img src="{{ asset('storage/hotel-g8e3629921_640.jpg')}}" alt="desarrollo" width="180" height="160">
           <div>
             <h3 class="fs-5 mt-4 px-4 pb-1">Servicios</h3> 
             <p class="px-4">Desarrollo de aplicaciones WEB, Moviles y E-commerce</p>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
           <img src="{{ asset('storage/receptionists-gcf96979de_640.jpg')}}" alt="beneficios" width="180" height="160">
           <div>
             <h3 class="fs-5 mt-4 px-4 pb-1">Atencion al cliente</h3> 
             <p class="px-4">Beneficios y agenda de eventos para conocer</p>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
           <img src="{{ asset('storage/salento-ge5491458a_640.jpg')}}" alt="visiitas" width="180" height="160">
           <div>
             <h3 class="fs-5 mt-4 px-4 pb-1">Nuestro Turismo</h3> 
             <p class="px-4">apuntar directamente a aquellas personas que tengan mayores
               chances de convertirse en 
             oportunidades </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
           <img src="{{ asset('storage/dancers-gae850a85c_640.jpg')}}" alt="emprender" width="180" height="160">
           <div>
             <h3 class="fs-5 mt-4 px-4 pb-1">Nuestra Cultura</h3> 
             <p class="px-4">Herramientas de capacitacion para PyMEs.</p>
           </div>
         </div>
       </div>
     </section>
     <section>
      <div class="w-50 m-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2">A un clic de tu reserva con <span class="text-primary">HOTELINE</span></h1>
        <p class="fs-4">Siempre trabajamos con talento y responsabilidad para brindarte el mejor servicio</p>
      </div>

      <div class="mt-5 text-center">
        <img class="img-fluid" src="{{ asset('storage/agent-g8b80014f0_640.jpg') }}" alt="equipo">
      </div>
    </section>

  @endsection