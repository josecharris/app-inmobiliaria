@extends('layouts.app')

@if(Auth::user()->hasRole('admin'))
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
      <a class="dropdown-item" href="{{route('list_cita')}}">Listar cita</a>
    </div>
  </li>
</ul>
</nav>
<form action="{{route('store_inmueble')}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <div class="row">
          .<div class="col-md-6">
            <h3 class="card-title" style="color: #062378"><strong>Agregar Inmueble</strong></h3>
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
          </div>
          <div class="col-md-4">
            <textarea class="form-control" name="description" rows="3"
            placeholder="Descripción" style="margin-top: 60px;" required></textarea>
            <br>
            <input type="file" class="form-control" name="url">
            <br>
            <button type="submit" class="btn btn-danger btn-block">Enviar</button>
          </div>

        </div>
      </div>
    </div>
</form>
@endsection
@endif

@if(Auth::user()->hasRole('user'))
@section('nav')
<nav class="nav">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item f">
    <a class="nav-link active" href="{{route('home')}}">INICIO</a>
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
      <a class="dropdown-item" href="{{route('list_cita')}}">Listar cita</a>
    </div>
  </li>
</ul>
</nav>

<form action="{{route('store_inmueble')}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <div class="row">
          .<div class="col-md-6">
            <h3 class="card-title" style="color: #062378"><strong>Agregar Inmueble</strong></h3>
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
          </div>
          <div class="col-md-4">
            <textarea class="form-control" name="description" rows="3"
            placeholder="Descripción" style="margin-top: 60px;" required></textarea>
            <br>
            <input type="file" class="form-control" name="url">
            <br>
            <button type="submit" class="btn btn-danger btn-block">Enviar</button>
          </div>

        </div>
      </div>
    </div>
</form>
@endsection
@endif
