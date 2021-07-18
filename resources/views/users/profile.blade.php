@extends('layouts.masterUsuario') @section('title') Ingresar al Sistema
@endsection @section('content')


	<div class="row margensuperior">
		
	<div class="col-md-12 col-md-offset-6 mt-5">
		<h1>Perfil de Usuario</h1>
		<h1>Sus Pedidos</h1>

	
		
		@foreach($pedidos as $pedido)
		<div class="card ">


			<div class="card-header"><strong>Fecha:</strong> {{$pedido->created_at}} <strong>Pedido Nro:</strong> {{$pedido->id}} <strong>Estado:</strong> <a href="#" class="badge badge-primary">{{$pedido->estado_pedido}}</a></div>
			<div class="card-body">
				<blockquote class="blockquote mb-0">
					<ul class="list-group list-group-flush">
					@foreach($pedido->detalles as $detalle)
						<li class="list-group-item">{{$detalle->producto_id}} {{$detalle['producto']['nombre']}}</li>
					@endforeach
					</ul>
					<footer class="blockquote-footer">
						Someone famous in <cite title="Source Title">Source Title</cite>
					</footer>
				</blockquote>
			</div>
		</div>

		@endforeach
	</div>
</div>

@endsection
