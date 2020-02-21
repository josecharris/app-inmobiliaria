@extends('template')

@section('central')
  <img src="{{asset('img/conjunto.jpg')}}" alt="">
@endsection

@section('content')
<div class="">
  <div class="row" style="background-color:#f4f4f4; margin-top: 10px">
    <div class="col-md-12">
      <hr>
        <h2 class="h2" style="text-align: center"><i>Recorrido por las propiedades</i></h2>
      <hr>
    </div>
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
         <hr>
         <h3>Tipo: {{$casa->type}}</h3>
         <h3>Dirección: {{$casa->address}}</h3>
         <h3>Area: {{$casa->size}}</h3>
         <h3>{{$casa->description}}</h3>
         <hr>
         <div class="alert alert-light" role="alert">
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
       <hr>
       <h3>Tipo: {{$casa->type}}</h3>
       <h3>Dirección: {{$casa->address}}</h3>
       <h3>Area: {{$casa->size}}</h3>
       <h3>{{$casa->description}}</h3>
       <hr>
       <div class="alert alert-primary" role="alert">
          <h2 class="h2"><strong>Precio: {{$casa->price}}</strong></h2>
        </div>
     </div>
   </div>
   @endif
   <hr style="background-color: black">
 @endforeach
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
