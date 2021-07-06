@extends('layouts.master') @section('title') Afiliados @endsection
@section('styles')
    <style>
        a,
        a:hover,
        a:focus {
            outline: none;
            text-decoration: none;
        }

        h2 {
            float: left;
            width: 100%;
            color: #fff;
            margin-bottom: 30px;
            font-size: 14px;
        }

        h2 span {
            font-family: 'Libre Baskerville', serif;
            display: block;
            font-size: 45px;
            text-transform: none;
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 700
        }

        h2 a {
            color: #fff;
            font-weight: bold;
        }


        section {

            float: left;
            width: 100%;
            background: #43cea2;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #185a9d, #43cea2);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #185a9d, #43cea2);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 30px 0;
        }

        .card {
            -moz-box-direction: normal;
            -moz-box-orient: vertical;
            background-color: #fff;
            border-radius: 0.25rem;
            display: flex;
            flex-direction: column;
            position: relative;
            margin-bottom: 1px;
            border: none;
        }

        .card-header:first-child {
            border-radius: 0;
        }

        .card-header {
            background-color: #f7f7f9;
            margin-bottom: 0;
            padding: 20px 1.25rem;
            border: none;

        }

        .card-header a i {
            float: left;
            font-size: 25px;
            padding: 5px 0;
            margin: 0 25px 0 0px;
            color: #195C9D;
        }

        .card-header i {
            float: right;
            font-size: 30px;
            width: 1%;
            margin-top: 8px;
            margin-right: 10px;
        }

        .card-header a {
            width: 97%;
            float: left;
            color: #565656;
        }

        .card-header p {
            margin: 0;
        }

        .card-header h3 {
            margin: 0 0 0px;
            font-size: 20px;
            font-family: 'Slabo 27px', serif;
            font-weight: bold;
            color: #3fc199;
        }

        .card-block {
            -moz-box-flex: 1;
            flex: 1 1 auto;
            padding: 20px;
            color: #232323;
            box-shadow: inset 0px 4px 5px rgba(0, 0, 0, 0.1);
            border-top: 1px soild #000;
            border-radius: 0;
        }

    </style>
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-center"><span>Maneras de afiliarte a esta pagina</span>Creado con el <i
                        class="fa fa-heart"></i> de Dogsi Admin</h2>
                <div class="col-md-8 offset-md-2">
                    <div class="bd-example" data-example-id="">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <div class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <h3>Publicidad</h3>
                                            <p>Llega a más gente con publicidad atraves esta página.</p>
                                        </a>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                    aria-expanded="false" style="">
                                    <div class="card-block">
                                        Por favor si quieres puedes contactarte vía email o telégono.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <div class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <h3>Convierte en nuestro proveedor</h3>
                                            <p>Los productos de mascotas al por mayor nos interesan para agrandar nuestro
                                                catálogo.</p>
                                        </a>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                    aria-expanded="false">
                                    <div class="card-block">
                                        Por favor si quieres puedes contactarte vía email o telégono. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <div class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <h3>Convierte en un socio</h3>
                                            <p>Si tienes una tienda física puedes poner tú catálogo online</p>
                                        </a>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                    aria-expanded="false">
                                    <div class="card-block">
                                        Sube tu marca y/o catálogo en linea y así logra agrandar tus ventas online!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
