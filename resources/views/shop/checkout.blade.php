@extends('layouts.master')
@section('title') CheckOut @endsection
@section('styles')
@endsection()
@section('content')
    <div class="container mt-5 clasePerfilMargenSuperior">

        {{-- <div class="row mt-5">
            <div class="col-sm">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">

                        <p>Existen campos que falta por completar mire debajo el resumen</p>

                    </div>
                @endif
            </div> 
        </div> --}}


            <form id="check-out" action="{{ route('guardarPedido') }}" method="post">

                <div class="row">
                    <!--DATOS PERSONALES-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-header">Finalizar la Compra</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Datos del Usuario</h5>
                                </div>
                                <div class="form-group">
                                    <label for="nombres">Nombres:</label>
                                    <input type="text" name="nombres" class="form-control" value="{{ Session::has('clientePotencial') ? Session::get('clientePotencial')->name: old('nombres') }}"
                                        id="nombres" placeholder="Ingrese sus nombres">

                                    <small>{!! $errors->first('nombres', ' <div class="invalid-feedback text-danger">:message</div>') !!}</small>
                                    <div class="valid-feedback">Bien.</div>
                                    <div class="invalid-feedback">Por favor ingrese sus nombres.</div>
                                </div>

                                <div class="form-group">
                                    <label for="apellidos">Apellidos:</label>
                                    <input type="text" name="apellidos" class="form-control"
                                        value="{{ Session::has('clientePotencial') ? Session::get('clientePotencial')->apellidos : old('apellidos') }}"
                                        id="apellidos" placeholder="Ingrese sus apellidos">
                                    <small>{!! $errors->first('apellidos', ' <div class=" text-danger">:message</div>') !!}</small>
                                    <div class="valid-feedback">Bien.</div>
                                    <div class="invalid-feedback">Por favor ingrese sus apellidos.</div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ Session::has('clientePotencial') ? Session::get('clientePotencial')->email : old('email') }}"
                                        id="email" placeholder="Ingrese su email">

                                    <div class="valid-feedback">Bien.</div>
                                    <div class="invalid-feedback">Por favor su email.</div>
                                    <small>{!! $errors->first('email', ' <div class=" text-danger">:message</div>') !!}</small>
                                </div>
                                <div class="form-group">
                                    <label for="celular">Celular:</label>
                                    <input type="text" name="celular" class="form-control" value="{{ old('celular') }}"
                                        id="celular" placeholder="Ingrese su celular">
                                    <small>{!! $errors->first('celular', ' <div class=" text-danger">:message</div>') !!}</small>
                                    <div class="valid-feedback">Bien.</div>
                                    <div class="invalid-feedback">Por favor ingrese su celular.</div>
                                </div>
                                <div class="form-group">
                                    <label for="cedula">Cedula:</label>
                                    <input type=" number  " id="cedula"
                                        value="{{ Session::has('clientePotencial') ? Session::get('clientePotencial')->cedula : old('cedula') }}"
                                        class="form-control" placeholder="Ingrese su Cédula" name="cedula">
                                    <small>{!! $errors->first('cedula', ' <div class=" text-danger">:message</div>') !!}</small>
                                    <div class="valid-feedback">Bien.</div>
                                    <div class="invalid-feedback">Por favor ingrese su cédula.</div>
                                </div>
                                <div class="form-group">
                                    <h5>Datos de Entrega</h5>
                                </div>
                                {{-- <div class="form-group">
                                <label for="principal">Calle Principal:</label>
                                <input type="text" id="principal"
                                    value="{{ Session::has('direccionClientePotencial') ? Session::get('direccionClientePotencial')->callePrimaria : old('principal') }}"
                                    class="form-control" placeholder="Ingrese la calle principal" name="principal">
                                    <small>{!! $errors->first('principal', ' <div class="text-danger">:message</div>')!!}</small>
                                <div class="valid-feedback">Bien.</div>
                                <div class="invalid-feedback">Por favor ingrese calle principal.</div>
                            </div>
                            <div class="form-group">
                                <label for="secundaria">Calle Secundaria:</label>
                                <input type="text" id="secundaria"
                                    value="{{ Session::has('direccionClientePotencial') ? Session::get('direccionClientePotencial')->calleSecundaria : old('secundaria') }}"
                                    class="form-control" placeholder="Ingrese la calle secundaria" name="secundaria">
                                    <small>{!! $errors->first('secundaria', ' <div class=" text-danger">:message</div>')!!}</small>
                                <div class="valid-feedback">Bien.</div>
                                <div class="invalid-feedback">Por favor ingrese calle secundaria.</div>
                            </div>
                            <div class="form-group">
                                <label for="numero">Numero:</label>
                                <input type="text" id="numero"
                                    value="{{ Session::has('direccionClientePotencial') ? Session::get('direccionClientePotencial')->numero : old('numero') }}"
                                    class="form-control" placeholder="Ingrese el numero de casa" name="numero">
                                    <small>{!! $errors->first('numero', ' <div class=" text-danger">:message</div>')!!}</small>
                                <div class="valid-feedback">Bien.</div>
                                <div class="invalid-feedback">Por favor ingrese numero de casa</div>
                            </div>
                            <div class="form-group">
                                <label for="referencia">Referencia:</label>
                                <input type="text" id="referencia"
                                    value="{{ Session::has('direccionClientePotencial') ? Session::get('direccionClientePotencial')->referencia : old('referencia') }}"
                                    class="form-control" placeholder="Ingrese la referencia de la casa" name="referencia">
                                    <small>{!! $errors->first('referencia', ' <div class=" text-danger">:message</div>')!!}</small>
                                <div class="valid-feedback">Bien.</div>
                                <div class="invalid-feedback">Por favor ingrese referencia de la casa</div>
                            </div> --}}
                                {{-- <div class="form-group">
                                <label for="provincia">Provincia:</label>
                                <select name="provincia" id="provincia" class="form-control input-lg dynamic"
                                    data-dependent="ciudad">
                                    <option value="">Seleccionar Provincia</option>
                                    @foreach ($provincia_list as $provincia)
                                        <option value="{{ $provincia->id_ubicaciones }}"

                                            {{ old('provincia') == $provincia->id_ubicaciones ? 'selected' : '' }}>
                                            {{ $provincia->nombre }}</option>
                                    @endforeach
                                </select>
                                <small>{!! $errors->first('provincia', ' <div class=" text-danger">:message</div>')!!}</small>
                            </div> --}}
                                {{-- <div class="form-group">
                                <label for="ciudad">Ciudad:</label>
                                <select name="provincia" id="provincia" class="form-control input-lg dynamic"
                                data-dependent="ciudad">
                                <option value="">Seleccionar Provincia</option>
                                @foreach ($provincia_list as $provincia)
                                    <option value="{{ $provincia->id_ubicaciones }}"
                                        {{ old('provincia') == $provincia->id_ubicaciones ? 'selected' : '' }}>
                                        {{ $provincia->nombre }}</option>
                                @endforeach
                            </select>
                                <small>{!! $errors->first('ciudad', ' <div class=" text-danger">:message</div>')!!}</small>
                                <div class="valid-feedback">Bien.</div>
                                <div class="invalid-feedback">Por favor ingrese Ciudad.</div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-header">Método de Pago</div>
                            <div class="card-body">
                                <div id="accordion" role="tablist">
                                    @foreach ($formasPago as $forma)
                                        <div class="card">
                                            <div class="card-header" role="tab" id="heading{{ $forma->id }}">
                                                <div class="form-check">
                                                    <label for="formaPago" class="form-check-label"></label>
                                                    <input data-toggle="collapse" href="#collapse{{ $forma->id }}"
                                                        aria-expanded="true" aria-controls="collapse{{ $forma->id }}"
                                                        type="radio" class="form-check-input" value="{{ $forma->id }}"
                                                        name="formaPago"
                                                        {{ old('formaPago') == $forma->id ? 'checked' : '' }}>
                                                    <h5 class="mb-0">{{ $forma->nombre }}</h5>
                                                </div>
                                            </div>
                                            <div id="collapse{{ $forma->id }}" class="collapse" role="tabpanel"
                                                aria-labelledby="headingOne" data-parent="#accordion">




                                                @if ($forma->nombre === 'Pago con PAYPAL')
                                                    <div class="card-body">

                                                        <div id="paypal-button-container">

                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="card-body">
                                                        {{ $forma->nombre }}
                                                    </div>

                                                @endif

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-header">Tramitar Pedido</div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-6">
                                        <strong>Subtotal producto</strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <strong id="total"> {{ $total }}</strong> USD
                                    </div>

                                    <div class="col-6">
                                        <strong> Envío </strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <strong> 3,99 USD </strong>
                                    </div>

                                    <div class="col-12">
                                        <p> <span class="font-blue">Envío GRATIS a partir de 39,00 </span></p>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <h4> <strong> Total </strong></h4>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h4> <strong> {{ $total }} USD </strong></h4>

                                            </div>
                                        </div>
                                        <p class="text-right text-tax">Todos los precios incluyen IVA</p>
                                    </div>

                                    <div class="col-12 margin-top-10 ">

                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            <h5> <strong> Pagar&nbsp;&nbsp;{{ $total }} USD </strong></h5>
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>


        <div class="row mt-5">
            <div class="col-sm">
                {{-- @if (count($errors) > 0)
                    <div class="alert alert-danger ">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif --}}
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        //dd the checkout buttons, set up the order and approve the order

        // paypal.Buttons({
        //     createOrder: function(data, actions) {
        //         return actions.order.create({
        //             purchase_units: [{
        //                 amount: {
        //                     value: '20.99'
        //                 }
        //             }]
        //         });
        //     },
        //     onApprove: function(data, actions) {
        //         return actions.order.capture().then(function(details) {
        //             alert('Transaction completed by ' + details.payer.name.given_name);
        //         });
        //     }
        // }).render('#paypal-button-container'); // Display payment options on your web page


        // var cambiarEnFuncionProvincia = function() {
        //     console.log($('.dynamic').val());
        //     if ($('.dynamic').val() != '') {
        //         var select = $('.dynamic').attr("id");
        //         var value = $('.dynamic').val();
        //         var dependent = $('.dynamic').data('dependent');
        //         var _token = $('input[name="_token"]').val();
        //         console.log(_token);
        //         $.ajax({
        //             url: "ciudades",
        //             method: "POST",
        //             data: {
        //                 select: select,
        //                 value: value,
        //                 _token: _token,
        //                 dependent: dependent
        //             },
        //             success: function(result) {
        //                 console.log("lLEG RESUL");
        //                 $('#' + dependent).html(result);
        //             }
        //         })
        //     }
        // };

        // cambiarEnFuncionProvincia();

        // $(document).ready(function() {
        //     $('.dynamic').change(cambiarEnFuncionProvincia);
        //     $('#provincia').change(function() {
        //         $('#ciudad').val('');
        //     });
        // });
    </script>
@endsection
