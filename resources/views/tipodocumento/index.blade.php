@extends('index')

@section('content')
<section class="container-fluid" style="margin-top: 5%; ">
    <div class="w-50 m-auto text-center">
      <div class="card" style="background: #55CFE8;">
        <div class="card-header">
         Registrar Tipo Documento
       </div>
       <div class="card-body">
         <form>
          <div class="mb-3">
            <label  class="form-label me-auto mb-2 mb-lg-0">Tipo Documento</label>
            <input name="tipo" class="form-control me-2" type="email" placeholder="Tipo Documento" aria-label="email">
          </div>
          <button class="btn btn-primary btn-primary-outline-success me-2" type="submit">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection