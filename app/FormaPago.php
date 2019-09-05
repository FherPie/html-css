<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    //     Una forma tiene muchos pedidos
    public function pedido(){
        return $this->belongsTo('App/Pedido');
    }
    
}
