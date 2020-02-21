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
@endsection
@endif


@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

  <div class="imagen_central">
    <img src="{{asset('img/conjunto.jpg')}}" alt="">
  </div>

  @foreach($casas as $casa)
    @if($loop->odd)
    <hr style="background-color: black">
      <div class="row fondo" style="margin-top: 10px; margin-bottom: 10px;
      width:80%; margin-left:20px;">
        <div class="col-md-6">
          <img src="{{asset($casa->url)}}" alt="" class="imagen_setting">
        </div>
        <div class="col-md-6">
          <h2 style="text-align: center"><i>Propiedad {{$loop->iteration}}</i></h2>
          <h3>Tipo: {{$casa->type}}</h3>
          <h3>Dirección: {{$casa->address}}</h3>
          <h3>Area: {{$casa->size}}</h3>
          <h3>{{$casa->description}}</h3>
          <hr>
          <hr>
          <div class="alert alert-warning" role="alert">
           <h2 class="h2"><strong>Precio: {{$casa->price}}</strong></h2>
         </div>
        </div>
      </div>
    @endif
    @if($loop->even)
    <div class="row fondo2" style="margin-bottom: 10px;
    width:80%; margin-left:200px">
      <div class="col-md-6">
        <img src="{{asset($casa->url)}}" alt="" class="imagen_setting">
      </div>
      <div class="col-md-6">
        <h2 style="text-align: center"><i>Propiedad {{$loop->iteration}}</i></h2>
        <h3>Tipo: {{$casa->type}}</h3>
        <h3>Dirección: {{$casa->address}}</h3>
        <h3>Area: {{$casa->size}}</h3>
        <h3>{{$casa->description}}</h3>
        <div class="alert alert-secondary" role="alert">
           <h2 class="h2"><strong>Precio: {{$casa->price}}</strong></h2>
         </div>
      </div>
    </div>
    @endif
    <hr style="background-color: black">
  @endforeach

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
<footer>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
            <div class="imagen">
              <img src=" {{asset('img/logo.jpeg') }}" class="imagen_fixed" style="margin-left: -25px;
              margin-top:2px">
            </div>
              <br>
              <h4 class="h4" style="text-align:center;"><center><small>CONSTRUYENDO SUEÑOS &copy; 2020</small></center></h4>
          </div>
          <div class="col-md-4">
              <p class="text-right social"><i class="typcn typcn-social-facebook-circular"></i><i class="typcn typcn-social-twitter-circular"></i><i class="typcn typcn-social-tumbler-circular"></i><i class="typcn typcn-social-github-circular"></i><i class="typcn typcn-social-dribbble-circular"></i></p>
          </div>
      </div>
    </div>
</footer>
@endsection
