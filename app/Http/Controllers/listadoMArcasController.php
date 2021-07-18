<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\listadoMarcas;
use App\SubCategoriaProducto;
use App\Producto;




use Auth;


class listadoMArcasController extends Controller
{
    public
    function __construct(){

    }
    public
    function index(){
        $marcas =DB::table('marca as ma')
        ->select('ma.nombre', 'ma.id_marca', 'ma.version', 'ma.codigo')
        ->orderBy('ma.nombre', 'asc')
        ->get();
    
        return view('marcas.listadoMarcas', ["objeto_marcas"=>$marcas]);
    }
  

}
