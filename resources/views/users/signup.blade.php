@extends('layouts.master')
@section('title')
Registro de Usuarios
@endsection
@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-6">
		<h1>Registrarse</h1>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif
		<form action="{{route('users.signup')}}" method="post">
			<div class="form-group">
				<label for="nombre">Nombre:</label> <input type="text" 
					id="nombre" name="nombre" class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="email">Correo Electronico:</label> <input type="text"
					id="email" name="email"  class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="password">Contrasena:</label> <input type="password"
					id="password" name="password"  class="form-control"></input>
								<label for="password_confirmation">Confirmar Contrasena:</label> <input type="password"
					id="password_confirmation" name="password_confirmation"  class="form-control"></input>
			</div>

			<button type="submit"  class="btn btn-primary">Registrarse</button>
			 {{ csrf_field() }}
		</form>
	</div>
</div>
@endsection