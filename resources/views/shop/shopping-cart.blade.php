@extends('layouts.master')

@section('title')
Items agregados
@endsection


@section('content')
@if(Session::has('cart'))
<div class="row">
 <div class="col-sm-15 col-md-12 col-md-offset-3 col-sm-offset-3">
 
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">PrecioUnitario</th>
      <th scope="col">Total</th>   
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    <tr>
      <th scope="row">1</th>
      <td>{{$producto['item']['nombre']}}</td>
      <td>  
      
      <a href="{{route('producto.reduceToCartCheckOut', ['id' => $producto['item']->id_producto])}}">Reducir en Uno</a>/
         <a  href="{{route('producto.addToCartCheckOut', ['id' => $producto['item']->id_producto])}}">Aumentar en Uno</a>
      <span class="badge badge-primary">
     
      {{$producto['qty']}}</span>
      
      <a  href="{{route('producto.removeItem', ['id' => $producto['item']->id_producto])}}">Quitar</a>
      
      </td>
      <td>{{number_format($producto['item']['precio_referencial_venta'], 2, '.', ',')}}</td>
       <td>{{number_format($producto['item']['precio_referencial_venta']*$producto['qty'], 2, '.', ',')}}</td>
    </tr>
    @endforeach
      <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Total :</th>
      <th scope="col"><strong> {{number_format($precioTotal, 2, '.', ',')}}</strong></th>   
    </tr>
  </tbody>
</table>
 </div>
</div>

<div class="row">
   <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <a   href="{{route('checkout')}}"   type="button" class="btn btn-success">
       CheckOut
     </a>
   </div>
</div>


@else
<div class="row">
   <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>No hay productos en el Carro</h2>
   </div>
</div>
@endif
@endsection