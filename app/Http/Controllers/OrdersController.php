<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('items')){
            $items =  request('items');
        }else{
            $items =  5;
        }

        $orders= Pedido::leftJoin('users','pedidos.user_id', '=', 'users.id')
        ->select('pedidos.*' ,'users.name');
        
        $queries=[];

        $columns=[
          'estadoPedido', 'total'
        ];
 
        foreach ($columns as $column) {
            if(request()->has($column)){
                $orders= $orders->where($column, request($column));
                $queries[$column]=request($column);
            }
        }
        
        if(request()->has('search')){
            $search= request('search');
            $orders= $orders->where('estadoPedido', 'like', '%'. $search.'%')
            ->orWhere('users.name',  'like', '%'. $search.'%');
            $queries['search']=$search;
        }

        $orders= $orders->where('users.name', 'like', '%'. $search.'%')
        ->orWhere('users.name',  'like', '%'. $search.'%');


        if(request()->has('sort')){
            $orders=  $orders->orderBy('total', request('sort'));
            $queries['sort']=request('sort');
        }

            $queries['items']=$items;
            $orders= $orders->paginate($items)->appends($queries);
            $menu='pedidos';

        return view('users.orders', compact('orders', 'menu'))
        ->withItems($items);
    }
    
    
}
