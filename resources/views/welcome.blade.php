@extends('template')

@section('central')
  <img src="{{asset('img/conjunto.jpg')}}" alt="">
@endsection

@section('content')
<div class="">
  <div class="row" style="background-color:#f4f4f4; margin-top: 10px">
    <div class="col-md-12">
      <hr>
        <h1 style="text-align: center"><i>Recorrido por las propiedades</i></h1>
      <hr>
    </div>
  </div>

  <div class="row fondo" style="margin-top: 10px; margin-bottom: 10px">
    <div class="col-md-6">
      <img src="{{asset('img/casa1.jpg')}}" alt="" class="imagen_setting">
    </div>
    <div class="col-md-6">
      <h2 style="text-align: center"><i>Propiedad 1</i></h2>
      <h3>Tipo:</h3>
      <h3>Ciudad:</h3>
      <h3>Barrio</h3>
      <h3>Area</h3>
      <h3>Tiene 5 habitaciones</h3>
    </div>
  </div>
  <hr style="background-color: black">
  <div class="row fondo2" style="margin-bottom: 10px">
    <div class="col-md-6">
      <img src="{{asset('img/casa1.jpg')}}" alt="" class="imagen_setting">
    </div>
    <div class="col-md-6">
      <h2 style="text-align: center"><i>Propiedad 2</i></h2>
      <h3>Tipo:</h3>
      <h3>Ciudad:</h3>
      <h3>Barrio</h3>
      <h3>Area</h3>
      <h3>Tiene 5 habitaciones</h3>
    </div>
  </div>
  <hr style="background-color: black">

</div>





@endsection
