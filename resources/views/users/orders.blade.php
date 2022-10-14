<!-- index.blade.php -->
@extends('layouts.masterUsuario') @section('content')
<div class="mt-5">
    <h1>Lista de Ordenes</h1>

    Filter:
    <a href="/orders/?estadoPedido=Nuevo">Nuevo</a>
    <a href="/orders/?estadoPedido=Enviado">Enviado</a>
    <a href="/orders">Reset</a>
    Sort:
    <a href="{{ route('users.orders', ['total' => request('total'), 'sort' => 'asc']) }}">Ascendente</a>
    <a href="{{ route('users.orders', ['total' => request('total'), 'sort' => 'desc']) }}">Descendente</a>




    <form class="" action="/orders" method="get">
        <div class="row">
    <div class=" input-group mt-2  mb-2 col-12">
            <input type="search" name="search" class="  form-control "  placeholder="Buscar por nombre.." aria-label="Buscar por nombre.." aria-describedby="btn-buscar"/>
            <button id="btn-buscar" type="submit" class=" btn-group-lg  btn-orange"> Buscar </button>
        </div>
     
    </div>
    </form>



    {{ $orders->total() }} Registros ¦ Página: {{ $orders->currentpage() }} de {{ $orders->lastPage() }}
    <form>
        Items por pagina: <select id="pagination">
            <option value="5" @if ($items == 5) selected @endif>5</option>
            <option value="10" @if ($items == 10) selected @endif>10</option>
            <option value="25" @if ($items == 25) selected @endif>25</option>
        </select>
    </form>
    {{ $orders->links('pagination::bootstrap-4') }}
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nro. Pedido</th>
                <th>Usuario</th>
                <th>Estado Pedido</th>
                <th>Forma Pago</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->withUsers->name }}</td>
                    <td>{{ $order->estadoPedido }}</td>
                    <td>{{ $order->withFormaPago->nombre }}</td>
                    <td>USD. {{ $order->total }}</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitariio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->detallesPedido as $detalle)
                                    <tr>
                                        <td>{{ $detalle->producto->nombre }}</td>
                                        <td>{{ $detalle->cantidad }}</td>
                                        <td>{{ $detalle->valor_unitario }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $orders->links('pagination::bootstrap-4') }}

</div>

    <script>
        document.getElementById('pagination').onchange = function() {
            window.location = "{!! $orders->url(1) !!}&items=" + this.value;
        };
    </script>
@endsection
