<!-- <div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div> -->

<nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top scrolling-navbar">
	<!-- Additional container -->
	<div class="container-fluid">
		<a class="navbar-brand" href="{{route('producto.index')}}">DOGSI-Tienda</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			@if(Session::has('subcategorias')) @foreach(
			Session::get('subcategorias') as $subcategoria)
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle"
					data-toggle="dropdown">{{$subcategoria->nombre}}</button>
				<div class="dropdown-menu">
					@foreach($subcategoria->subCategoriasProducto as $ssubcategoria) <a
						class="dropdown-item"
						href="{{route('producto.index',['id' => $ssubcategoria->id_subcategoria_producto])}}">{{$ssubcategoria->nombre}}</a>
					@endforeach
				</div>
			</div>
			@endforeach @endif
			<!-- Links -->
			<ul class="navbar-nav mr-auto  smooth-scroll">
				<li class="nav-item"><a class="nav-link" href="#intro">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#best-features">Nosotros</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="#examples">Peluquería</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="#gallery">Servicios</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="#contact">Contactos</a>
				</li>
			</ul>

			<!-- Social Icon  -->
			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item"><a class="nav-link"><i
						class="fab fa-facebook-f"></i></a></li>
				<li class="nav-item"><a class="nav-link"><i class="fab fa-twitter"></i></a>
				</li>
				<li class="nav-item"><a class="nav-link"><i class="fab fa-instagram"></i></a>
				</li>
			</ul>

			<ul class="navbar-nav mr-auto">
				<!--       <li class="nav-item active"> -->
				<!--         <a class="nav-link" href="{{route('producto.index')}}">Home <span class="sr-only">(current)</span></a> -->
				<!--       </li> -->
				<li class="nav-item"><a class="nav-link"
					href="{{route('producto.shopingCart')}}"> <i
						class="fas fa-shopping-cart"></i> Carrito de Compras <span
						class="badge badge-pill badge-primary">{{Session::has('cart')?
							Session::get('cart')->totalQty:''}}</span>

				</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
					href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user"></i>
						Cuenta de Usuario
				</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@if(Auth::check()) <a class="dropdown-item"
							href="{{route('users.profile')}}">Perfil Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{route('users.logout')}}">Cerrar
							Sesion</a> @else <a class="dropdown-item"
							href="{{route('users.signup')}}">Registrarse</a> <a
							class="dropdown-item" href="{{route('users.signin')}}">Iniciar
							Sesion</a> @endif


					</div></li>
			</ul>
		</div>
	</div>
</nav>