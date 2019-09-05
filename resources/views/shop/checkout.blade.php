@extends('layouts.master') @section('title') CheckOut @endsection
@section('styles')
<style type="text/css">
input:required:invalid, input:focus:invalid {
	background-image:
		url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
	background-position: right top;
	background-repeat: no-repeat;
	-moz-box-shadow: none;
}

input:required:valid {
	background-image:
		url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
	background-position: right top;
	background-repeat: no-repeat;
}
</style>
@endsection() @section('content')


<div class="container">
	<h1>Checkout</h1>
	<h4>Your Total: ${{ $total }}</h4>
	 @if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
	@endif



	<form id="checkout-form" class="was-validated" action="{{route('checkout')}}" method="post">
		<div class="row">
			<div class="col-sm">
				<h3>Datos Completos</h3>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="nombreCompleto">Nombres y Apellidos:</label> <input
								type="text"
								value="{{Session::has('clientePotencial')?
        Session::get('clientePotencial')->nombreCompleto:''}}"
								id="nombreCompleto"
								placeholder="Ingrese sus nombres y apellidos"
								name="nombreCompleto" class="form-control" required>
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese sus nombres
								completos.</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="email">Email:</label> <input type="text"
								value="{{Session::has('clientePotencial')?
        Session::get('clientePotencial')->email:''}}"
								id="email" name="email" placeholder="Ingrese su email"
								class="form-control" required>
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor su email.</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="celular">Celular:</label> <input type="text"
								id="celular"
								value="{{Session::has('clientePotencial')?
        Session::get('clientePotencial')->celular:''}}"
								class="form-control" placeholder="Ingrese su Celular"
								name="celular" required>
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese su celular.</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="cedula">Cedula:</label> <input type="text"
								id="cedula"
								value="{{Session::has('clientePotencial')?
        Session::get('clientePotencial')->cedula:''}}"
								class="form-control" placeholder="Ingrese su Cédula"
								name="cedula" required>
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese su cédula.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<h3>Direccion de Entrega</h3>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="primaria">Calle Primaria:</label> <input type="text"
								id="primaria" class="form-control" name="primaria" required
								value="{{Session::has('direccionClientePotencial')?
        Session::get('direccionClientePotencial')->callePrimaria:''}}"
								placeholder="Ingrese la Calle Primaria">
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese calle primaria.</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="secundaria">Calle Secundaria:</label> <input
								type="text" id="secundaria" class="form-control"
								name="secundaria" required
								value="{{Session::has('direccionClientePotencial')?
        Session::get('direccionClientePotencial')->calleSecundaria:''}}"
								placeholder="Ingrese la Calle Secundaria">
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese calle secundaria.</div>

						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="referencia">Referencia:</label> <input type="text"
								id="referencia" name="referencia" class="form-control" required
								value="{{Session::has('direccionClientePotencial')?
        Session::get('direccionClientePotencial')->referencia:''}}"
								placeholder="Referencia de su Direccion">
							<div class="valid-feedback">Bien.</div>
							<div class="invalid-feedback">Por favor ingrese la referencia.</div>
						</div>
					</div>
				</div>
			</div>
		

		<div class="col-sm">

			<h3>Forma de Pago y Envío</h3>


			<table class="table table-striped">
				<thead>
					<tr>
						@foreach($formasPago as $forma)
						<th><div class="form-check" >
								<label for="formaPago" class="form-check-label"></label>
								 <input type="radio"
									class="form-check-input"  value="{{$forma->id}}"
									name="formaPago" required   >{{$forma->nombre}}
							</div></th> @endforeach
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach($formasPago as $forma)
						<td>{{$forma->nombre}}</td> @endforeach
					</tr>
				</tbody>
			</table>


			<button type="submit" class="btn btn-success" id="validarCliente">
				Guardar</button>
		</div>
	</div>
		 {{ csrf_field() }}
	</form>



</div>
@endsection

