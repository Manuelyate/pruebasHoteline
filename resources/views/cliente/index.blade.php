@extends('index')

@section('content')
<section class="container-fluid" style="margin-top: 5%; ">
    <div class="w-50 m-auto text-center">
      <div class="card" style="background: #55CFE8;">
        <div class="card-header">
         Registrar Usuario
       </div>
       <div class="card-body">
         <form>
          <div class="mb-3">
            <label  class="form-label me-auto mb-2 mb-lg-0">Correo Electronico</label>
            <input name="correo" class="form-control me-2" type="email" placeholder="Correo-Electronico" aria-label="email">
          </div>
          <div class="mb-3">
            <label  class="form-label me-auto mb-2 mb-lg-0">Nombre</label>
            <input name="nombre" class="form-control me-2" type="text" placeholder="Digite Nombre" aria-label="text">
          </div>
          <div class="mb-3">
            <label class="">Apellido</label>
            <input name="apellido" class="form-control me-2" type="text" placeholder="Digite Apellido" aria-label="text">
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">contraseña</label>
            <input name="contrasena" type="password" class="form-control" id="inputPassword">
          </div>
          <div class="mb-3">
            <label for="inputdate" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
            <input name="fecha" type="date" class="form-control" id="inputdate">
          </div>
          <div class="mb-3">
            <label for="inputdate" class="col-sm-2 col-form-label">Telefono</label>
            <input name="telefono" type="date" class="form-control" id="inputdate">
          </div>
          <div class="mb-3">
            <label for="inputdate" class="col-sm-2 col-form-label">Direccion</label>
            <input name="direccion" type="date" class="form-control" id="inputdate">
          </div>
          <div class="mb-3">
            <label for="inputdate" class="col-sm-2 col-form-label">Numero Documento</label>
            <input name="numdocumento" type="date" class="form-control" id="inputdate">
          </div>
          <!--<a href="/menuprincipal" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Registrar</a>-->
          <button class="btn btn-primary btn-primary-outline-success me-2" type="submit">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection