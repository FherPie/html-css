<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\CategoriaProducto;
use App\Producto;
use App\Carro;
use App\FormaPago;
use Auth;
use App\SubCategoriaProducto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
  
    public function getIndex(Request $request){
        
        if($request->input('id')){
//             $productos = DB::table('producto')->where('id_sub_categoria_producto', '=', $request->input('id'))->orderBy('nombre', 'asc')->paginate(5);
           
            
            $productosPaginados=DB::table('producto')->where('id_sub_categoria_producto', '=', $request->input('id'))->orderBy('nombre', 'asc')->paginate(5);
        
        }else{
//             $productos= Producto::all();
            
//             $productos = DB::table('producto')
//             ->orderBy('nombre', 'asc')
//             ->get();
            
            $productosPaginados=DB::table('producto')
            ->orderBy('nombre', 'asc')->paginate(5);
        }    
        //         $subcategorias = DB::table('categoria_producto')->select('nombre', 'id_categoria_producto')->get();
        //         $subcategorias=  DB::table('sub_categoria_producto')->join('categoria_producto', 'sub_categoria_producto.id_categoria_producto', '=', 'categoria_producto.id_categoria_producto')
        //         ->select('sub_categoria_producto.nombre as nombreSubCategoria', 'sub_categoria_producto.id_subcategoria_producto', 'categoria_producto.nombre', 'categoria_producto.id_categoria_producto')
        //         ->get();
        $subcategorias = CategoriaProducto::with('subCategoriasProducto')->get(array('id_categoria_producto', 'nombre'));
        
        //         $subcategorias =CategoriaProducto::with(['subCategoriasProducto'=>function($query){
        //             $query->select('id_subcategoria_producto','nombre');
        //         }])->get(array('id_categoria_producto', 'nombre'));
        //         $subcategorias= $subcategorias->subCategoriasProducto();
        
        //         $data = json_encode((array)$subcategorias);
        $request->session()->put('subcategorias', $subcategorias);

        return view('shop/index', [ 'subcategorias'=>$subcategorias], compact('productosPaginados'));
    }
    
    public function getProductoVista(Request $request){
        
        if($request->input('id')){
            $producto= Producto::find($request->input('id'));
        }
        $producto->detallesArchivos=$producto->detallesArchivo()->get();
        
        
       
        return view('shop/productoVista', ['producto'=>$producto]);
    }
    
    
    
    
    public function getAddToCart(Request $request, $id_producto){
        $producto= Producto::find($id_producto);
        $oldCart= Session::has('cart')? Session::get('cart'):null;
//         error_log(Session::get('cart'));
        $cart= new Carro($oldCart);
        $cart->add($producto, $producto->id_producto);
        $request->session()->put('cart', $cart);
//          dd($request->session()->get('cart'));
         $request->session()->save();
        return redirect()->route('producto.index');
    }
    
    public function getAddToCartCheckOut(Request $request, $id_producto){
        $producto= Producto::find($id_producto);
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        //         error_log(Session::get('cart'));
        $cart= new Carro($oldCart);
        $cart->add($producto, $producto->id_producto);
        $request->session()->put('cart', $cart);
        //          dd($request->session()->get('cart'));
        $request->session()->save();
        return redirect()->route('producto.shopingCart');
    }
    
    public function getReduceCartCheckOut(Request $request, $id_producto){
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        //         error_log(Session::get('cart'));
        $cart= new Carro($oldCart);
        $cart->reducir( $id_producto);
        if(count($cart->items)>0){
            $request->session()->put('cart', $cart);
        }else{
            $request->session()->forget('cart');
        }
        
 
        //          dd($request->session()->get('cart'));
        $request->session()->save();
        return redirect()->route('producto.shopingCart');
    }
    public function removeItem(Request $request, $id_producto){
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        //         error_log(Session::get('cart'));
        $cart= new Carro($oldCart);
        $cart->removeItem( $id_producto);
        if(count($cart->items)>0){
            $request->session()->put('cart', $cart);
        }else{
            $request->session()->forget('cart');
        }
        //          dd($request->session()->get('cart'));
        $request->session()->save();
        return redirect()->route('producto.shopingCart');
    }
    
    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $odlCart=Session::get('cart');
        $cart=new Carro($odlCart); 
        return view('shop.shopping-cart', ['productos'=>$cart->items, 'precioTotal'=>$cart->totalPrice]);
    }
    
    public function getCheckout(Request $request){

        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart= new Carro($oldCart);
        $total= $cart->totalPrice;
        $request->session()->put('clientePotencial', Auth::user());
        $FormasPago= FormaPago::all();
        
        if( Auth::user()==null){   
            Session::put('oldUrl', $request->url());
            return redirect()->route('users.signin');
         
        }
        
        return view('shop.checkout', ['total'=>$total, 'formasPago'=> $FormasPago]);
        
    }
    public function postCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart= new Carro($oldCart);
        $total= $cart->totalPrice;
        
        return view('shop.checkout', ['total'=>$total]);
        
    }
    
}
