@extends('layouts.master')
@section('title')
    Ingresar al Sistema
@endsection
@section('content')
    <div class="container">
        
        <div class="row justify-content-md-center" >
            <div class="col col-md-auto shadow card border-light mb-3 mt-3">
                <h1 class="mt-3">Bienvenido de Vuelta</h1>
                <hr>
                {{-- @if (count($errors) > 0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif --}}
                <form action="{{ route('users.signin') }}" method="post">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <label for="email">Correo Electronico:</label>

                        <input class=" form-control bg-light shadow-sm  {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            type="email" required id="email" name="email" class="form-control" value="{{ old('email') }}">
                        </input>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <i class="fa fa-key"></i>
                        <label for="password">Contrasena:</label> <input type="password"
                            class=" form-control {{ $errors->has('password') ? ' is-invalid' : '' }} bg-light shadow-sm" id="password" name="password"
                            ></input>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-blue-grey btn-block">Ingresar al sitio</button>
                    {{ csrf_field() }}
                </form>
                <hr class="  current">
                <p>Si no tiene una cuenta <a href="{{ route('users.signup') }}">Hágalo Aquí</a></p>
            </div>
        </div>
    </div>
@endsection
