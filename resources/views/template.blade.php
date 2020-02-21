<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Web inmobiliaria</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left" style="margin-left:350px">

            </ul>
            <ul class="nav navbar-nav navbar-center">
                <li><a href="#" style="color: red; font-weight: bold; margin: 10px; font-size: 22px;">CONSTRUYENDO SUEÑOS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right:150px">
                <li><a href="{{route('home')}}" style="font-weight: bold"><img src="{{asset('img/usuario.png')}}" style="margin-right: 10px; color: black">Login</a></li>
            </ul>
        </div>
        <!-- BARRA ROJA -->
        <div class="barra"></div>
    </nav>

    <!-- IMAGEN DEL LOGO-->
    <div class="imagen">
      <img src=" {{asset('img/logo.jpeg') }}" class="imagen_fixed" alt="">
    </div>

    <!-- IMAGEN DE FONDO-->
    <div class="imagen_central">
      @yield('central')
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    </div>

    <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                <div class="imagen">
                  <img src=" {{asset('img/logo.jpeg') }}" class="imagen_fixed" style="margin-left: -25px;">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
