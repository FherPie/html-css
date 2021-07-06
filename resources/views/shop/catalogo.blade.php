@extends('layouts.master')
@section('title')
    Catalogo
@endsection
@section('styles')
    <style>
        .card {
            width: 350px;
        }

    </style>
@endsection


@section('content')
    <br />
    <div class="row mt-5">

    </div>


    {{ $Productos->total() }} Registros ¦ Página: {{ $Productos->currentpage() }} de {{ $Productos->lastPage() }}

    <form>
        Items por pagina: <select id="pagination">
            <option value="5" @if ($items == 5) selected @endif>5</option>
            <option value="10" @if ($items == 10) selected @endif>10</option>
            <option value="25" @if ($items == 25) selected @endif>25</option>
        </select>
    </form>
    {{ $Productos->links('pagination::bootstrap-4') }}
    <div class="row">
        @foreach ($Productos as $product)
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img src="storage/catalogo/producto/{{ $product->imagen }}" class="card-img-top">
                    <div class="card-body">
                        <a target="_blank" href="{{ route('producto.vista', ['id' => $product->id_producto]) }}"
                            class="card-title">{{ $product->nombre }}</a>
                        <p class="card-text descripcion">{{ $product->descripcion }}</p>
                        <div class="clear-fix">
                            <div class=" pull-left price">
                                {{ number_format($product->precio_referencial_venta, 2, '.', ',') }} USD </div>
                            <a href="{{ route('producto.addToCart', ['id' => $product->id_producto]) }}"
                                class="btn btn-success pull-right">Agregar al carro</a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $Productos->links('pagination::bootstrap-4') }}

@endsection

@section('scripts')
    <script>
        document.getElementById('pagination').onchange = function() {
            window.location = "{!! $Productos->url(1) !!}&items=" + this.value;
        };
    </script>
@endsection
