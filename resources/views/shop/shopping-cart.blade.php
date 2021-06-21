@extends('layouts.master')

@section('title')
Items agregados
@endsection
@section('styles')
<link rel="stylesheet" href="{{ URL::to('src/css/shoopingCart.css')}}"/>
@endsection
@section('content')
@if(Session::has('cart'))


      <div class="container mt-5 clasePerfilMargenSuperior">
       <div class="row">
	   <div class="col-md-8">
        <div class="card  table-responsive">
          <table class="table table-hover shopping-cart-wrap">
          <thead class="text-muted">
          <tr>
            <th scope="col">Producto</th>
         
            <th scope="col" width="200" class="text-right">Acción</th>
            <th scope="col" width="120">Cantidad</th>
            <th scope="col" width="120">Precio Unitario</th>
            <th scope="col" width="120">Total</th>
         
          </tr>
          </thead>
          <tbody>
          @foreach($productos as $producto)
          <tr>
            <td>
          <figure class="media">
            <!-- <div class="img-wrap"><img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg"
               class="img-thumbnail img-sm"></div> -->
            <figcaption class="media-body">
              <h6 class="title text-truncate">{{$producto['item']['nombre']}}</h6>
              <!-- <dl class="param param-inline small">
                <dt>Size: </dt>
                <dd>XXL</dd>
              </dl> -->
              <!-- <dl class="param param-inline small">
                <dt>Color: </dt>
                <dd>Orange color</dd>
              </dl> -->
            </figcaption>
          </figure> 
            </td>
            <td class="text-right"> 
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('producto.addToCartCheckOut', ['id' => $producto['item']->id_producto])}}" class="btn btn-outline-danger btn-round"><i class="fa fa-plus"></i> </a>
                    <a href="{{route('producto.reduceToCartCheckOut', ['id' => $producto['item']->id_producto])}}" class="btn btn-outline-danger btn-round"> <i class="fa fa-minus"></i></a>
                  </div>
            </td>
            <td> 
            <span class="badge badge-primary">{{$producto['qty']}}</span>
            </td>
            <td> 
              <div class="price-wrap"> 
                <var class="price">USD {{number_format($producto['item']['precio_referencial_venta'], 2, '.', ',')}}</var> 
                <small class="text-muted">(USD C/U)</small> 
              </div> <!-- price-wrap .// -->
            </td>
            <td> 
                <div class="price-wrap"> 
                  <var class="price">USD {{number_format($producto['item']['precio_referencial_venta']*$producto['qty'], 2, '.', ',')}}</var> 
                </div> <!-- price-wrap .// -->
              </td>
 
          </tr>
          @endforeach
          </tbody>
          </table>  
      </div> 
       </div>
	   <div class="col-md-4">
	   
	    <div class="card"  style="padding:15px;">
	    <table class="table table-hover shopping-cart-wrap">
		  <tr>
              <td colspan="4" class="text-right">
                <div class="price-wrap"  > 
                  <var class="price">Sutotal</var> 
                  <!-- <small class="text-muted">(USD15 each)</small>  -->
                </div> <!-- price-wrap .// -->
              </td>
              <td> 
                  <div class="price-wrap"> 
                    <var class="price">USD {{number_format($precioTotal, 2, '.', ',')}}</var> 
                  </div> <!-- price-wrap .// -->
                </td>
            </tr>
            <tr>
              <td colspan="4" class="text-right">
                <div class="price-wrap"  > 
                  <var class="price">Impuestos</var> 
                  <!-- <small class="text-muted">(USD15 each)</small>  -->
                </div> <!-- price-wrap .// -->
              </td>
              <td> 
                  <div class="price-wrap"> 
                    <var class="price">USD {{number_format($impuestos, 2, '.', ',')}}</var> 
                  </div> <!-- price-wrap .// -->
                </td>
            </tr>

		      	<tr>
                  <td colspan="4" class="text-right">
                    <div class="price-wrap"  > 
                      <var class="price">TOTAL</var> 
                      <!-- <small class="text-muted">(12 %)</small>  -->
                    </div> <!-- price-wrap .// -->
                  </td>
                  <td> 
                      <div class="price-wrap"> 
                        <var class="price">USD {{number_format($precioConImpuesto, 2, '.', ',')}}</var> 
                      </div> <!-- price-wrap .// -->
                  </td>
       
            </tr>
    </table>
    
    <div class="row">
                <div class="col text-center">
                <a   href="{{route('checkout')}}"   type="button" class="btn btn-success">CheckOut</a>
                </div>
              </div>
	   </div>
      </div>
     </div>



@else
<br/>
<div class="row mt-5">
   <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>No hay productos en el Carro</h2>
   </div>
</div>
@endif
@endsection