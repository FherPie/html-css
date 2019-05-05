<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //
    public function getIndex(){
        
        $productos= Producto::all();
        

        return view('shop/index', ['productos'=>$productos]);
    }
    
}
