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
      <h3>Tipo: Arriendo</h3>
      <h3>Ciudad: Sogamoso, Boyacá</h3>
      <h3>Barrio: El bosque</h3>
      <h3>Area: 42 m2</h3>
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
      <h3>Tipo: Venta</h3>
      <h3>Ciudad: Sogamoso, boyacá</h3>
      <h3>Barrio: Laguito</h3>
      <h3>Area: 96.00 m2</h3>
      <h3>Tiene 5 habitaciones</h3>
    </div>
  </div>
  <hr style="background-color: black">
</div>

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