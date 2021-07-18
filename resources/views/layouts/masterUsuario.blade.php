<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet"  type="text/css" href="{{ URL::to('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet"  type="text/css" href="{{ URL::to('css/bootstrap.min.css.map')}}"/>
  
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::to('css/mdb.min.css')}}"/>


<link rel="stylesheet" href="{{ URL::to('src/slick/slick.css')}}"/>
<link rel="stylesheet" href="{{ URL::to('src/slick/slick-theme.css')}}"/>
{{-- 
<link rel="stylesheet" href="{{ URL::to('css/app.css')}}"/> --}}
 @yield('styles')
<!--  <meta name="csrf-token" content="{{ csrf_token() }}"> -->
</head>
<body>
@include('partials.header')
<!-- <aside class="aside"> -->
<!-- </aside> -->
<div class="container navbar-static-top mt-5">

<div class="row">
		<div class="col-md-3  ">
		     <div class="list-group ">
              <a href="{{route('users.orders')}}" class="list-group-item list-group-item-action active">Pedidos</a>
              <a href="{{route('users.profile')}}" class="list-group-item list-group-item-action">Perfil</a>
              <a href="" class="list-group-item list-group-item-action">Direccion</a>
              <a href="{{ route('users.logout') }}" class="list-group-item list-group-item-action">Salir de Sesion</a>
            </div>
		</div>
<div class="col-md-9">
    @yield('content')

    
</div>
</div>




</div>
<!-- <script -->
<!--   src="https://code.jquery.com/jquery-3.4.1.min.js" -->
<!--   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" -->
<!--   crossorigin="anonymous"></script> -->

<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!--     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
@include('partials.footer')
     <script type="text/javascript"  src="{{ URL::to('js/jquery-2.2.0.min.js')}}"></script>
     <script type="text/javascript"  src="{{ URL::to('js/popper.min.js')}}"></script>
     <script type="text/javascript"  src="{{ URL::to('js/bootstrap.min.js')}}"></script>

 <script type="text/javascript"  src="{{ URL::to('js/bootstrap.min.js.map')}}"></script>
     
     
     <script type="text/javascript"  src="{{ URL::to('js/mdb.min.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/scrolling-nav.js')}}"></script>
       <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
       <script type="text/javascript"  src="{{ URL::to('src/slick/slick.min.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/pais.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/megamenu.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/estilos.js')}}"></script>
       <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


@yield('scripts')
</body>
</html>
