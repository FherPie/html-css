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
use App\Ubicaciones;
use Illuminate\Support\Facades\DB;

class UbicacionesController extends Controller
{
      
  function ciudades(Request $request)
    {
     error_log("Llega Ciudades");
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = Ubicaciones::where('padre', '=', $value)->orderBy('nombre', 'asc')
        ->get();
     $output = '<option value=""   >Seleccionar '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->id_ubicaciones.'"   >'.$row->nombre.'</option>';
     }
     echo $output;
    }
}
