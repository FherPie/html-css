<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\FormaPago;
use App\Carro;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cedula' => ' required|numeric',
            'apellidos' => 'required|string|max:256'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cedula'=>$data['cedula'],
            'apellidos' => $data['apellidos'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    public function getSignup(){
        return view('users.signup');
    }
    
    public function postSignup(Request $request){
        
        $this->validate($request, [
            
            'nombre'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:6|confirmed',
            'cedula' => ' required|numeric',
            'apellidos' => 'required|string|max:256'
        ]);
        
        $current_id = DB::table('users')->max('id');

        error_log('$current_id ');

        error_log($current_id );

        $user= new User([
            'id'=>$current_id + 1,
            'name' => $request['nombre'],
            'email' => $request['email'],
            'cedula' => $request['cedula'],
            'apellidos' => $request['apellidos'],
            'password' => bcrypt($request['password'])
        ]);

        $user->save();
        
        Auth::login($user);
        
        
        
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

        return redirect()->route('producto.index');
    }    
}

