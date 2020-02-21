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
</ul>
</nav>

<form action="{{route('update_inmueble', $inmueble->id)}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @method('put')
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Editar empleado</h3>
        <div class="form-group">
              <input type="text" name="address" class="form-control"
              value="{{$inmueble->address}}" required>
              <br>
              <input type="text" name="size" class="form-control"
              value="{{$inmueble->size}}" required>
              <br>
              <input type="text" name="type" class="form-control"
              value="{{$inmueble->type}}" required>
              <br>
              <input type="number" name="price" class="form-control"
              value="{{$inmueble->price}}" required>
              <br>
              <input type="text" name="owner_phone" class="form-control"
              value="{{$inmueble->owner_phone}}" required>
              <br>
              <textarea class="form-control" name="description" rows="3"
              value="{{$inmueble->description}}" required></textarea>
              <br>
              <input type="file" class="form-control" name="url">
              <br>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
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


<form action="{{route('update_inmueble', $inmueble->id)}}" method="post" style="margin-left: -400px; margin-top: 20px;">
    @method('put')
    @csrf
    <div class="card" style="width: 890px; margin: 0 auto">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center">Editar empleado</h3>
        <div class="form-group">
              <input type="text" name="address" class="form-control"
              value="{{$inmueble->address}}" required>
              <br>
              <input type="text" name="size" class="form-control"
              value="{{$inmueble->size}}" required>
              <br>
              <input type="text" name="type" class="form-control"
              value="{{$inmueble->type}}" required>
              <br>
              <input type="number" name="price" class="form-control"
              value="{{$inmueble->price}}" required>
              <br>
              <input type="text" name="owner_phone" class="form-control"
              value="{{$inmueble->owner_phone}}" required>
              <br>
              <textarea class="form-control" name="description" rows="3"
              value="{{$inmueble->description}}" required></textarea>
              <br>
              <input type="file" class="form-control" name="url">
              <br>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </div>
      </div>
    </div>

</form>
@endsection
@endif
