@extends('layouts.master') @section('title') Producto Detalle
@endsection
@section('styles')
<link rel="stylesheet" href="{{ URL::to('src/css/detailProductoCSS.css')}}"/>
@endsection
 @section('content')
 <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class=" tab-content">
                          <div class="tab-pane active" ><img id="pic-1" src="https://www.w3schools.com/howto/img_nature.jpg" /></div>
                          <div id="imgtext"></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                          <li ><a><img  class="active" src="https://www.w3schools.com/howto/img_nature.jpg" alt="Nature" style="width:100%"
                                onclick="myFunction(this);">
                          </a></li>
                          <li><a >   <img src="https://www.w3schools.com/howto/img_snow.jpg" alt="Snow" style="width:100%"
                            onclick="myFunction(this);"></a></li>
                          <li><a > <img src="https://www.w3schools.com/howto/img_mountains.jpg" alt="Mountains" style="width:100%"
                            onclick="myFunction(this);"></a></li>
                          <li><a > <img src="https://www.w3schools.com/howto/img_lights.jpg" alt="Lights" style="width:100%"
                            onclick="myFunction(this);"></a></li>
                            <li><a > <img src="https://www.w3schools.com/howto/img_lights.jpg" alt="Lights" style="width:100%"
                                onclick="myFunction(this);"></a></li>
					    	@foreach($producto->detallesArchivo as $detalle)
								<li><a > <img src="storage/catalogo/producto/{{$detalle->nombre}}" alt="{{$detalle->nombre}}" style="width:100%"
                                onclick="myFunction(this);"></a></li>
							@endforeach
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$producto->nombre}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 Revisiones</span>
                        </div>
                        <p class="product-description">{{$producto->descripcion}}</p>
                        <h4 class="price">Precio Actual: <span> {{
				number_format($producto->precio_referencial_venta, 2, '.', ',')}}
				USD</span></h4>
                        <p class="vote"><strong>91%</strong> de los compradores les gustó este producto!! <strong>(87 Votos)</strong></p>
                        <h5 class="sizes">Tamaños:
                            <span class="size" data-toggle="tooltip" title="small">s</span>
                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                            <span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                        </h5>
                        <h5 class="colors">Colores:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5>
						<h4 class="price">Mas Descripción Adicional: 
						<p class="product-description">
						{{$producto->informacion_adicional}}
						</p>
						</h4>
                        <div class="action">
						<a href="{{route('producto.addToCart', ['id' => $producto->id_producto])}}" class=" add-to-cart btn btn-default pull-right">Agregar al carrito</a>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('scripts')
<script type="text/javascript"  src="{{ URL::to('js/zommPlus.js')}}"></script>
@endsection
