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
      <a class="dropdown-item" href="list_inmueble">Listar inmuebles</a>
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

<div class="card" style="margin-left: -210px; width: 900px; margin-top: 20px;">
  <div class="card-body">
    <h3 class="card-title" style="text-align: center">Lista de empleados</h3>
    <div class="form-group">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>Telefono</th>
          <th>Acciones</th>
        </tr>
        @foreach($usuarios as $item)
          <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->name}}</th>
            <th>{{$item->email}}</th>
            <th>{{$item->phone}}</th>
            @if($item->name != "Admin")
              <th>
                <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a>
                <form class="d-inline" action="{{route('eliminar', $item->id)}}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </th>
            @endif

          </tr>
        @endforeach
      </table>
      {{$usuarios->links()}}
    </div>
  </div>
</div>

@endsection
