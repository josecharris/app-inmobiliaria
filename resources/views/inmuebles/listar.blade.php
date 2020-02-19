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

<div class="card" style="margin-left: -310px; width: 1000px; margin-top: 20px;">
  <div class="card-body">
    <h3 class="card-title" style="text-align: center">Lista de inmuebles</h3>
    <div class="form-group">
      <table class="table">
        <tr>
          <th>Dirección</th>
          <th>Tamaño</th>
          <th>Tipo</th>
          <th>Precio</th>
          <th>Telef. Propietario</th>
          <th>Acciones</th>
        </tr>
        @foreach($inmuebles as $item)
          <tr>
            <th>{{$item->address}}</th>
            <th>{{$item->size}}</th>
            <th>{{$item->type}}</th>
            <th>{{$item->price}}</th>
            <th>{{$item->owner_phone}}</th>
            <th>
              <a href="{{ route('edit_inmueble', $item->id) }}" class="btn btn-warning">Editar</a>
              <form class="d-inline" action="{{route('eliminar_inmueble', $item->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </th>
          </tr>
        @endforeach
      </table>
      {{$inmuebles->links()}}
    </div>
  </div>
</div>

@endsection
