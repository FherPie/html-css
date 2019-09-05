<?php

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\FormaPago;
use App\Carro;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//     protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function getSignin(){
        return view('users.signin');
    }
    
    public function postSignin(Request $request){
        
        
        $this->validate($request, [
            'email'=> 'required|string|email',
            'password'=> 'required|string|min:4'
        ]);
        
        if( Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password'), ])){
            
            
            if(!Session::has('cart')){
                return redirect()->route('users.profile');
            }
            $oldCart=Session::get('cart');
            $cart= new Carro($oldCart);
            $total= $cart->totalPrice;
            $request->session()->put('clientePotencial', Auth::user());
            $FormasPago= FormaPago::all();
//             Session::has('oldUrl', $request->url());
            if( Session::has('oldUrl')){
                Session::forget('oldUrl');
                return view('shop.checkout', ['total'=>$total, 'formasPago'=> $FormasPago]);
            }

            
            return redirect()->route('users.profile');
        };
        
        return redirect()->back();
    }
    
    public function getProfile(){
        $pedidos= Auth::user()->pedidos;
        foreach ($pedidos as $pedido){
            $pedido->detalles=$pedido->detallesPedido()->get();
            foreach ($pedido->detalles as $detalle){
                $detalle= $detalle->leftJoin('producto', 'producto_id', '=', 'producto_id')->get();
            }
        }
        
        return view('users.profile' , ['pedidos'=>$pedidos]);
    }
    
    public function postProfile(){
        return view('users.profile');
    }
    
    public function getLogout(){
        Auth::logout();
        error_log('Se deslogea.');
        return redirect()->route('producto.index')->with('msg_name', 'Adios vuelve pronto...');
  
    }
}
