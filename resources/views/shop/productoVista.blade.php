@extends('layouts.master') @section('title') Laravel Shooping Cart
@endsection @section('content')

<div class="row">
	<div class="col">
	<div class="row">
	<div class="col-2">
		@foreach($producto->detallesArchivo as $detalle)
		<a href="#">
		 	 <img width="100%" height="72" src="storage/catalogo/producto/{{$detalle->nombre}}">
		</a>
		 	 <br/>
		@endforeach 
	</div>
	
		<div class="col-10">
		
		

	 <img src="storage/collar2.jpg" class="card-img-top">
	</div>
	</div>
	</div>
	<div class="col">
		<ul class="list-group">
			<li class="list-group-item"><h3>
					<a
						href="{{route('producto.vista', ['id' => $producto->id_producto])}}"
						class="card-title">{{$producto->nombre}}</a>
				</h3></li>
			<li class="list-group-item">Precio: {{
				number_format($producto->precio_referencial_venta, 2, '.', ',')}}
				USD</li>
			<li class="list-group-item">Descripción:
				<p class="card-text descripcion">{{$producto->descripcion}}</p>
			</li>
			<li class="list-group-item"><a
				href="{{route('producto.addToCart', ['id' => $producto->id_producto])}}"
				class="btn btn-success pull-right">Agregar al carro</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col">
		<h5>Informacion Adicional del Producto</h5>
		<p class="card-text descripcion">{{$producto->informacion_adicional}}</p>
	</div>
</div>
@endsection
