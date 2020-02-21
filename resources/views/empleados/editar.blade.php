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
      <a class="dropdown-item" href="{{route('show')}}">Agregar empleados</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('list')}}">Listar empleados</a>
    </div>
  </li>
  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">INMUEBLE</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('show_inmueble')}}">Agregar inmueble</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('list_inmueble')}}">Listar inmuebles</a>
    </div>
  </li>
  <li class="nav-item dropdown f">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AGENDA</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('show_cita')}}">Crear cita</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Listar cita</a>
    </div>
  </li>
</ul>
</nav>

<form action="{{route('update', $usuario->id)}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @method('put')
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Editar empleado</h3>
        <div class="form-group">
              <input type="text" name="name" class="form-control" value="{{$usuario->name}}" required>
              <br>
              <input type="email" name="email" class="form-control" value="{{$usuario->email}}" required>
              <br>
              <input type="number" name="phone" class="form-control" value="{{$usuario->phone}}" required>
              <br>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </div>
      </div>
    </div>

</form>
@endsection
