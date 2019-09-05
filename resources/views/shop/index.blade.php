@extends('layouts.master')

@section('title')
Laravel Shooping Cart
@endsection


@section('content')
@if(Session::has('exito'))
<div class="row">
 <div id="charge_message" class="alert alert-success col-sm-12">
     {{Session::get("exito")}}
 </div>
</div>
@endif
<!-- <ul class="pagination justify-content-end"> -->
<!--   <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">1</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">2</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">3</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
<!-- </ul> -->


<h1>Nueva Lista Paginada Productos</h1>
{{ $productosPaginados->links("pagination::bootstrap-4") }}
<div class="row">
@foreach($productosPaginados as $product)
<div class="col-sm-6 col-md-4">
<div class="card" style="width: 18rem;">
 <img src="storage/catalogo/producto/{{$product->imagen}}"  class="card-img-top" >
  <div class="card-body">
    <a href="{{route('producto.vista', ['id' => $product->id_producto])}}" class="card-title">{{$product->nombre}}</a>
    <p class="card-text descripcion">{{$product->descripcion}}</p>
   <div class="clear-fix">
   <div class=" pull-left price">{{   number_format($product->precio_referencial_venta, 2, '.', ',')}} USD </div>
    <a href="{{route('producto.addToCart', ['id' => $product->id_producto])}}" class="btn btn-success pull-right">Agregar al carro</a>
   </div>
   
  </div>
</div>
</div>

@endforeach
</div>
<!-- {!! $productosPaginados->render() !!} -->

{{ $productosPaginados->links("pagination::bootstrap-4") }}


<p>Antigua Lista</p>
@foreach($productos->chunk(3) as $productChunk)
<div class="row">

@foreach($productChunk as $product)
<div class="col-sm-6 col-md-4">
<div class="card" style="width: 18rem;">
 <img src="storage/catalogo/producto/{{$product->imagen}}"  class="card-img-top" >
  <div class="card-body">
    <a href="{{route('producto.vista', ['id' => $product->id_producto])}}" class="card-title">{{$product->nombre}}</a>
    <p class="card-text descripcion">{{$product->descripcion}}</p>
   <div class="clear-fix">
   <div class=" pull-left price">{{   number_format($product->precio_referencial_venta, 2, '.', ',')}} USD </div>
    <a href="{{route('producto.addToCart', ['id' => $product->id_producto])}}" class="btn btn-success pull-right">Agregar al carro</a>
   </div>
   
  </div>
</div>
</div>
@endforeach
</div>
@endforeach
<!-- <ul class="pagination justify-content-end"> -->
<!--   <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">1</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">2</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">3</a></li> -->
<!--   <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
<!-- </ul> -->
@endsection