@extends('layouts.master')

@section('title')
Laravel Shooping Cart
@endsection


@section('content')
@foreach($productos->chunk(3) as $productChunk)
<div class="row">
@foreach($productChunk as $product)
<div class="col-sm-6 col-md-4">
<div class="card" style="width: 18rem;">
  <img src="https://images-na.ssl-images-amazon.com/images/I/8152xs1W5CL._SX355_.jpg" class="card-img-top" alt="...">
  <img src="{{ $product->url }}">
  <div class="card-body">
    <h5 class="card-title">{{$product->nombre}}</h5>
    <p class="card-text descripcion">{{$product->descripcion}}</p>
   
   <div class="clear-fix">
   <div class=" pull-left price">10USD</div>
    <a href="#" class="btn btn-success pull-right">Agregar al carro</a>
   </div>
   
  </div>
</div>
</div>
@endforeach
</div>
@endforeach
@endsection