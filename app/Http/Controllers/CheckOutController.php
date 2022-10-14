<?php
namespace App\Http\Controllers;
use App\DetallePedido;
use App\Direccion;
use App\Pedido;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{

    public function postCheckout(Request $request)
    {
        error_log('aqui eta el log**************');
 $this->validate($request, [

            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => Session::has('clientePotencial') ? 'required|string|email|max:255' : 'required|string|email|max:255|unique:users',
            'celular' => 'required|numeric',
            'cedula' => Session::has('clientePotencial') ? 'required' : 'required|unique:users',
            'principal' => 'required',
            'secundaria' => 'required',
            'numero' => 'required',
            'referencia' => 'required',
            'formaPago' => 'required|filled',
            
            //'ciudad' => 'required|filled'
        ]);

        $user = new User([
          
            'apellidos' => $request['apellidos'],
            'email' => $request['email'],
            'celular' => $request['celular'],
            'cedula' => $request['cedula'],
        ]);

        $usuario = Auth::user();
        $usuario->cedula = $request['cedula'];
        $usuario->celular = $request['celular'];
        $usuario->nombres = $request['nombres'];
        $usuario->apellidos = $request['apellidos'];
        $usuario->update();
        $request->session()->put('clientePotencial', $usuario);
        $direccion = new Direccion([
            'callePrimaria' => $request['principal'],
            'calleSecundaria' => $request['secundaria'],
            'referencia' => $request['referencia'],
            'numero' => $request['numero'],
            //'ubicacion_id' => $request['ciudad']
        ]);

        $request->session()->put('direccionClientePotencial', $direccion);

        $request->session()->put('formaPago', $request['formaPago']);

        $request->session()->save();
      
      

        $radio = $request->get('formaPago');
        $current_id = DB::table('pedidos')->max('id');
        $pedido = new Pedido([
            'id'=>$current_id + 1,
        ]);
        $pedido->user_id = $user->id;

        $pedido->estadoPedido = 40;
        $pedido->formapago_id = $radio;

        if (Auth::user() !== null) {
            //   Auth::user()->direcciones()->save($direccion);
            if (Session::has('cart')) {

                $cart = Session::get('cart');

                $pedido->total = $cart->totalPrice;

                error_log('LLEGA HASTA PEDIDOS**************');
                $pedido = Auth::user()->pedidos()->save($pedido);

                //  Auth::user()->direcciones()->save($direccion);
                foreach ($cart->items as $value) {
                    $detallePedido = new DetallePedido();
                    $detallePedido->pedido_id = $pedido->id;
                    $detallePedido->producto_id = $value['item']->id_producto;
                    $detallePedido->cantidad = $value['qty'];
                    $detallePedido->valor_unitario = $value['price'];
                    $detallePedido->save();
                }
            }

        }

        Session::forget('cart');
        Session::forget('clientePotencial');
        Session::forget('direccionClientePotencial');
        Session::forget('formaPago');

        return redirect()->route('producto.index')->with("exito", "Gracias por su compra!!!");
    }

// public function guadarClienteDireccion(Request $request){

//         $validator = \Validator::make($request->all(), [
    //             'primaria'=> 'required',
    //             'secundaria'=>  'required',
    //             'referencia'=> 'required'
    //         ]);

//         if ($validator->fails())
    //         {
    //             return response()->json(['errors'=>$validator->errors()->all()]);
    //         }

//         $direccion= new Direccion([
    //             'callePrimaria' => $request['primaria'],
    //             'calleSecundaria' => $request['secundaria'],
    //             'referencia' => $request['referencia']
    //         ]);

//         $request->session()->put('direccionClientePotencial', $direccion);

//         $request->session()->save();

//         return response()->json(['success'=>$direccion]);
    // }

}
