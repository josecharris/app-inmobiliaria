@extends('layouts.app')

@section('nav')
<nav class="nav">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item f">
    <a class="nav-link active" href="{{route('home')}}">INICIO</a>
  </li>

  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">EMPLEADOS</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Agregar empleados</a>
      <a class="dropdown-item" href="#">Mostrar empleados</a>
      <a class="dropdown-item" href="#">Actualizar empleados</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Eliminar empleados</a>
    </div>
  </li>
  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">INMUEBLE</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Agregar inmueble</a>
      <a class="dropdown-item" href="#">Mostrar inmueble</a>
      <a class="dropdown-item" href="#">Actualizar inmueble</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Eliminar inmueble</a>
    </div>
  </li>
  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AGENDA</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Crear cita</a>
      <a class="dropdown-item" href="#">Mostrar agenda</a>
      <a class="dropdown-item" href="#">Actualizar cita</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Eliminar cita</a>
    </div>
  </li>
  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">REPORTES</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item f">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ACERCA DE</a>
  </li>
</ul>
</nav>

<form action="{{route('store_inmueble')}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Agregar Inmueble</h3>
        <div class="form-group">
              <input type="text" name="address" class="form-control"
              placeholder="Digite la dirección" required>
              <br>
              <input type="text" name="size" class="form-control"
              placeholder="Digite el tamaño" required>
              <br>
              <input type="text" name="type" class="form-control"
              placeholder="Tipo:" required>
              <br>
              <input type="number" name="price" class="form-control"
              placeholder="Precio:" required>
              <br>
              <input type="text" name="owner_phone" class="form-control"
              placeholder="Teléfono del propietario:" required>
              <br>
              <textarea class="form-control" name="description" rows="3"
              placeholder="Descripción" required></textarea>
              <br>
              <input type="file" class="form-control" name="url">
              <br>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </div>
      </div>
    </div>

</form>
@endsection
