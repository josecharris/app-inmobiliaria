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

<div class="card" style="margin-left: -210px; width: 900px; margin-top: 20px;">
  <div class="card-body">
    <h3 class="card-title" style="text-align: center">Lista de citas</h3>
    <div class="form-group">
      <table class="table">
        <tr>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Lugar</th>
          <th>Descripción</th>
          <th>Nombre cliente</th>
          <th>Numero cliente</th>
          <th>Acciones</th>
        </tr>
        @foreach($citas as $item)
          <tr>
            <th>{{$item->date}}</th>
            <th>{{$item->hour}}</th>
            <th>{{$item->place}}</th>
            <th>{{$item->description}}</th>
            <th>{{$item->nameclient}}</th>
            <th>{{$item->phoneclient}}</th>
            <th>
              <a href="{{ route('edit_cita', $item->id) }}" class="btn btn-warning">Editar</a>
              <form class="d-inline" action="{{route('eliminar_cita', $item->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </th>

          </tr>
        @endforeach
      </table>
      {{$citas->links()}}
    </div>
  </div>
</div>
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

<div class="card" style="margin-left: -210px; width: 900px; margin-top: 20px;">
  <div class="card-body">
    <h3 class="card-title" style="text-align: center">Lista de citas</h3>
    <div class="form-group">
      <table class="table">
        <tr>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Lugar</th>
          <th>Descripción</th>
          <th>Nombre cliente</th>
          <th>Numero cliente</th>
          <th>Acciones</th>
        </tr>
        @foreach($citas as $item)
          <tr>
            <th>{{$item->date}}</th>
            <th>{{$item->hour}}</th>
            <th>{{$item->place}}</th>
            <th>{{$item->description}}</th>
            <th>{{$item->nameclient}}</th>
            <th>{{$item->phoneclient}}</th>
            <th>
              <a href="{{ route('edit_cita', $item->id) }}" class="btn btn-warning">Editar</a>
              <form class="d-inline" action="{{route('eliminar_cita', $item->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </th>

          </tr>
        @endforeach
      </table>
      {{$citas->links()}}
    </div>
  </div>
</div>
@endsection
@endif
