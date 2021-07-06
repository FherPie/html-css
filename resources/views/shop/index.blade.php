@extends('layouts.master')

@section('title')
    Tienda
@endsection
<header>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade mt-5" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                        alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">1600*707</h3>
                    <p>jpg</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                        alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">1321*583</h3>
                    <p>jpg</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="{{ URL::to('img/c1.jpg') }}" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slightsss mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <!--     <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fas fa-angle-left fa-2x"></i>

            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <!--     <span class="carousel-control-next-icon fa-10x  " aria-hidden="true"></span> -->
            <i class="fas fa-angle-right fa-2x"></i>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</header>

@section('content')

    @if (Session::has('exito'))
        <div class="row">
            <div id="charge_message" class="alert alert-success col-sm-12">
                {{ Session::get('exito') }}
            </div>
        </div>
    @endif


    <!-- {{ $id_subcategoriaProducto = Illuminate\Support\Facades\Input::has('id') ? Illuminate\Support\Facades\Input::get('id') : '' }} -->




    <!-- {{ $productosPaginados->appends(Request::except('page'))->links('pagination::bootstrap-4') }}
    <div class="row">

    @foreach ($productosPaginados as $product)
    <div class="col-sm-6 col-md-4">
    <div class="card" >
     <img src="storage/catalogo/producto/{{ $product->imagen }}"  class="card-img-top" >
      <div class="card-body">
        <a href="{{ route('producto.vista', ['id' => $product->id_producto]) }}" class="card-title">{{ $product->nombre }}</a>
        <p class="card-text descripcion">{{ $product->descripcion }}</p>
       <div class="clear-fix">
       <div class=" pull-left price">{{ number_format($product->precio_referencial_venta, 2, '.', ',') }} USD </div>
        <a href="{{ route('producto.addToCart', ['id' => $product->id_producto]) }}" class="btn btn-success pull-right">Agregar al carro</a>
       </div>
       
      </div>
    </div>
    </div>

    @endforeach
    </div> -->

    <!-- <section id="examples" class="text-center"> -->

    <!--Grid row-->
    <!--         <div class="row"> -->
    <!-- @foreach ($productosPaginados as $product) -->
              <!--Grid column-->
    <!--           <div class="col-lg-4 col-md-12 mb-4"> -->

    <!--             <div class="view overlay z-depth-1-half"> -->
    <!--               <img src="storage/catalogo/producto/{{ $product->imagen }}" class="img-fluid"> -->
    <!--               <a href="https://mdbootstrap.com/education/bootstrap/"> -->
    <!--                 <div class="mask rgba-white-slight"></div> -->
    <!--               </a> -->
                  
                  
    <!--             </div> -->

    <!--             <h4 class="my-4 font-weight-bold">Heading</h4> -->
    <!--             <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, -->
    <!--               aperiam minima -->
    <!--               assumenda deleniti hic.</p> -->

    <!--           </div> -->
    <!-- @endforeach -->
    <!--Grid column-->
    <!--         </div> -->
    <!--Grid row-->
    <!--       </section> -->
    <!--Section: Examples-->

    <!-- {!! $productosPaginados->render() !!} -->

    <!-- {{ $productosPaginados->appends(Request::except('page'))->links('pagination::bootstrap-4') }} -->

    <section id="masbuscados" class="single-rpost d-sm-flex align-items-center aos-init aos-animate" data-aos="fade-right"
        data-aos-delay="200" data-aos-duration="800">

        <div class="container-fluid">
            <div class="row">
                <h4>Productos mas buscados</h4>
                <section class="regular slider">
                    @foreach ($productosPaginados as $product)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top"
                                src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <h5 class="card-title"> <a
                                        href="{{ route('producto.vista', ['id' => $product->id_producto]) }}"
                                        class="card-title">{{ $product->nombre }}</a></h5>

                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    @endforeach


                </section>
            </div>
        </div>
    </section>

    <section id="promociones" class="single-rpost d-sm-flex align-items-center aos-init aos-animate" data-aos="fade-left"
        data-aos-delay="200" data-aos-duration="800">

        <div class="container-fluid">
            <div class="row">
                <h4>Promiciones Hasta Agotar Stock</h4>
                <section class="regular slider">


                    @foreach ($productosPromociones as $product)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top"
                                src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <h5 class="card-title"> <a
                                        href="{{ route('producto.vista', ['id' => $product->id_producto]) }}"
                                        class="card-title">{{ $product->nombre }}</a></h5>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    @endforeach




                </section>
            </div>
        </div>
    </section>



@endsection

@section('scripts')
    <script>
        $(document).on('ready', function() {
            $(".regular").slick({
                centerMode: true,
                centerPadding: '60px',
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            speed: 300,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            speed: 300,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            speed: 300,
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });



        });
    </script>
@endsection
