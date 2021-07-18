@extends('layouts.master')
@section('title')
    Registro de Usuarios
@endsection
@section('content')
<div class="container ">
    <div class="row">
		
        <div class="col-md-12 col-md-offset-6 mt-5 col shadow">

        
            <h1>Registrarse</h1>
            {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif --}}
            <form class="" action="{{ route('users.signup') }}" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label> <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}"
                        class="form-control  "></input>
                        <small>{!! $errors->first('nombre', ' <div class=" text-danger">:message</div>')!!}</small>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label> <input type="text" id="apellidos" name="apellidos"  value="{{old('apellidos')}}"
                        class="form-control  "></input>
                        <small>{!! $errors->first('apellidos', ' <div class=" text-danger">:message</div>')!!}</small>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electronico:</label> <input type="text" id="email" name="email"  value="{{old('email')}}"
                        class="form-control"></input>
                        <small>{!! $errors->first('email', ' <div class=" text-danger">:message</div>')!!}</small>
                </div>
                <div class="form-group">
                    <label for="cedula">Cedula:</label> <input type="text" id="cedula" name="cedula" value="{{old('cedula')}}"
                        class="form-control"></input>
                        <small>{!! $errors->first('cedula', ' <div class=" text-danger">:message</div>')!!}</small>
                </div>
                <div class="form-group">
                    <label for="password">Contrasena:</label> <input type="password" id="password" name="password" value="{{old('password')}}"
                        class="form-control"></input>
                        <small>{!! $errors->first('password', ' <div class=" text-danger">:message</div>')!!}</small>
                    <label for="password_confirmation">Confirmar Contrasena:</label> <input type="password"  value="{{old('password_confirmation')}}"
                        id="password_confirmation" name="password_confirmation" class="form-control"></input>
                        <small>{!! $errors->first('password_confirmation', ' <div class=" text-danger">:message</div>')!!}</small>
                </div>

                <button type="submit" class="btn btn-primary">Registrarse</button>
                <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                {{ csrf_field() }}
            </form>
      
        </div>
    </div>
</div>
@endsection
