<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DetallePedido extends Model
{
    
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id', 'pedido_id', 'cantidad', 'valor_unitario'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    /**
     *
     */
//     public function detallesPedido() {
//         return $this->hasMany('App\DetallePedido');
//     }


    public function pedido() {
        return $this->belongsTo('App\Pedido');
    }
    
    public function producto(){
        return $this->belongsTo('App\Producto');
    }
    
}
