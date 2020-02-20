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
      <a class="dropdown-item" href="{{route('list_cita')}}">Listar cita</a>
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

<form action="{{route('update_cita', $cita->id)}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @method('put')
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Editar cita</h3>
          <div class="row">
            <div class="col-md-6">
              <input type="date" class="form-control" name="fecha" value="{{$cita->date}}">
              <br>
              <label for="">Hora:</label>
              <input type="time" name="hora" value="{{$cita->hour}}">
              <br>
            </div>
            <div class="col-md-4">
              <input type="text" name="place" class="form-control" value="{{$cita->place}}" required>
              <br>
              <input type="text" name="description" class="form-control"
              value="{{$cita->description}}" required>
              <br>
              <input type="text" name="name_client" class="form-control"
              value="{{$cita->nameclient}}" required>
              <br>
              <input type="number" name="phone_client" class="form-control"
              value="{{$cita->phoneclient}}" required>
              <br>
              <button type="submit" style="background-color:#021242; color: white" class="btn btn-success btn-block">Agendar</button>
            </div>
          </div>
      </div>
    </div>

</form>
@endsection
