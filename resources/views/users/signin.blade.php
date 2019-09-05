@extends('layouts.master')
@section('title')
Ingresar al Sistema
@endsection
@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-6">
		<h1>Bienvenido de Vuelta</h1>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif
		<form action="{{route('users.signin')}}" method="post">
			<div class="form-group">
				<label for="email">Correo Electronico:</label> <input type="text"
					id="email" name="email"  class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="password">Contrasena:</label> <input type="password"
					id="password" name="password"  class="form-control"></input>
			</div>
			<button type="submit"  class="btn btn-primary">Ingresar al sitio</button>
			 {{ csrf_field() }}
		</form>
		<p>Si no tiene una cuenta <a href="{{route('users.signup')}}">Hágalo Aquí</a></p>
	</div>
</div>
@endsection