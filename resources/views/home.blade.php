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
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if(Auth::user()->hasRole('admin'))
  <div class="imagen_central">
    <img src="{{asset('img/conjunto.jpg')}}" alt="">
  </div>

  @foreach($casas as $casa)
    @if($loop->odd)
    <hr style="background-color: black">
      <div class="row fondo" style="margin-top: 10px; margin-bottom: 10px">
        <div class="col-md-6">
          <img src="{{asset('img/casa1.jpg')}}" alt="" class="imagen_setting">
        </div>
        <div class="col-md-6">
          <h2 style="text-align: center"><i>Propiedad {{$loop->iteration}}</i></h2>
          <h3>Tipo: {{$casa->type}}</h3>
          <h3>Dirección: {{$casa->address}}</h3>
          <h3>Area: {{$casa->size}}</h3>
          <h3>{{$casa->description}}</h3>
        </div>
      </div>
    @endif
    @if($loop->even)
    <div class="row fondo2" style="margin-bottom: 10px">
      <div class="col-md-6">
        <img src="{{asset('img/casa1.jpg')}}" alt="" class="imagen_setting">
      </div>
      <div class="col-md-6">
        <h2 style="text-align: center"><i>Propiedad {{$loop->iteration}}</i></h2>
        <h3>Tipo: {{$casa->type}}</h3>
        <h3>Dirección: {{$casa->address}}</h3>
        <h3>Area: {{$casa->size}}</h3>
        <h3>{{$casa->description}}</h3>
      </div>
    </div>
    @endif
    <hr style="background-color: black">
  @endforeach
@endif

@if(Auth::user()->hasRole('user'))
  <div class="alert alert-success" role="alert">
    <h2>Se ingresó como usuario</h2>
  </div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Contáctenos</h3>
      <hr>
      <h5 style="color: #f1b815">Envíanos tus inquietudes al correo *******@gmail.com | Teléfono: 314-123-576</h5>
      <h5 style="color: #f1b815">Sogamoso, Boyacá</h5>
    </div>
    <div class="col-md-6">
      <h3>Registrate para estar actualizado</h3>
      <hr>
      <form class="" action="" method="post">
        <input type="email" name="correo" id="correo" class="form-control" value="Ingrese aquí su e-mail" required>
        <button type="submit" name="enviar" class="btn btn-warning btn-block" style="margin-top: 10px; margin-bottom: 10px">Enviar</button>
      </form>
    </div>
  </div>
</div>

@endsection
