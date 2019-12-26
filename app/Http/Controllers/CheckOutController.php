<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Direccion;
use App\Pedido;
use App\EstadoPedido;
use Illuminate\Support\Facades\Auth;
use App\DetallePedido;

class CheckOutController extends Controller
{

    public function postCheckout(Request $request)
    {
        $this->validate($request, [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => Session::has('clientePotencial') ? 'required|string|email|max:255' : 'required|string|email|max:255|unique:users',
            'celular' => 'required',
            'cedula' => 'required',
            'principal' => 'required',
            'secundaria' => 'required',
            'numero' => 'required',
            'referencia' => 'required',
            'formaPago' => 'required|filled',
            'ciudad' => 'required|filled'
        ]);

        $user = new User([
            'nombreCompleto' => $request['nombreCompleto'],
            'email' => $request['email'],
            'celular' => $request['celular'],
            'cedula' => $request['cedula']
        ]);

        $usuario = Auth::user();
        $usuario->cedula = $request['cedula'];
        $usuario->celular = $request['celular'];
        $usuario->nombres = $request['nombres'];
        $usuario->apellidos = $request['apellidos'];

        $usuario->update();

        $request->session()->put('clientePotencial', $usuario);
        // error_log($user->id);

        $direccion = new Direccion([
            'callePrimaria' => $request['principal'],
            'calleSecundaria' => $request['secundaria'],
            'referencia' => $request['referencia'],
             'numero' => $request['numero'],
              'ubicacion_id' => $request['ciudad']
        ]);

        $request->session()->put('direccionClientePotencial', $direccion);

        $request->session()->put('formaPago', $request['formaPago']);

        $request->session()->save();

        $radio = $request->get('formaPago');
        $pedido = new Pedido();
        $pedido->user_id = $user->id;
        $pedido->estado_pedido = 50;
        $pedido->formapago_id = $radio;

        if (Auth::user() !== null) {
            // Auth::user()->direcciones()->save($direccion);
            if (Session::has('cart')) {
                $cart = Session::get('cart');
                $pedido->total = $cart->totalPrice;
                $pedido = Auth::user()->pedidos()->save($pedido);
                Auth::user()->direcciones()->save($direccion);
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
