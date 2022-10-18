<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTELINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <!----------------------------------------------------------->
    <nav class="navbar navbar-expand-lg bg-light p-3" id="menu">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('storage/unnamed.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="Inicio" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">Inicio</a>
          <ul class="dropdown-menu" id="usuarios">
          <li><a class="dropdown-item" href="menuprincipal" >Colsultar Hoteles</a></li>
          <li><a class="dropdown-item" href="menuprincipal" >Pagar Alojamiento</a></li>
          </ul>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('cliente.index')}}">Registrarse</a>
            </li>
          </div>
        </div>
      </nav>

      @yield('content')

    <!--- FOOTER  -->
    <section id="seccion-contacto" class="border-bottom">
     <div id="bg-contactos">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L26.7,85.3C53.3,75,107,53,160,90.7C213.3,128,267,224,320,245.3C373.3,267,427,213,480,197.3C533.3,181,587,203,640,176C693.3,149,747,75,800,85.3C853.3,96,907,192,960,213.3C1013.3,235,1067,181,1120,176C1173.3,171,1227,213,1280,218.7C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
     </div>
   </section>
   <header class="container-fluid bg-primary d-flex justify-content-center">
     <div class="row">       
      <div class="col-8">
        <p class="text-light mb-0 p-2 fs-6">Contactenos: 3217727119</p> 
      </div>
    </div>
  </header>

  <!------------------------------------------------------------>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>