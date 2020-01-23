<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\listadoMarcas;
use Auth;


class listadoMArcasController extends Controller
{
    public
    function __construct(){

    }
    public
    function index(){
        $marcas =DB::table('marca as l')
        ->select('l.nombre')
        ->orderBy('nombre', 'asc')
        ->get();
    
        return view('marcas.listadoMarcas', ["objeto_marcas"=>$marcas]);
    }
  

}
