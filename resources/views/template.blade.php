<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Plantilla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left" style="margin-left:350px">

            </ul>
            <ul class="nav navbar-nav navbar-center">
                <li><a href="#" style="color: red; font-weight: bold; margin-right: 150px">CONSTRUYENDO SUEÑOS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right:150px">
                <li><a href="#" style="font-weight: bold"><img src="{{asset('img/usuario.png')}}" style="margin-right: 10px">Login</a></li>
            </ul>
        </div>
        <!-- BARRA ROJA -->
        <div class="barra"></div>
    </nav>

    <!-- IMAGEN -->
    <div class="imagen">
      <img src=" {{asset('img/logo.jpeg') }}" class="imagen_fixed" alt="">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
