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

<form action="{{route('store')}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Agregar empleado</h3>
        <div class="form-group">
              <input type="text" name="name" class="form-control"
              placeholder="Digite el nombre del empleado" required>
              <br>
              <input type="email" name="email" class="form-control"
              placeholder="Digite el e-mail del empleado:" required>
              <br>
              <input type="number" name="phone" class="form-control"
              placeholder="Digite el telefono del empleado:" required>
              <br>
              <input type="password" name="password" class="form-control"
              placeholder="Digite la contraseña del empleado:" required>
              <br>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </div>
      </div>
    </div>

</form>
@endsection
