<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pedido extends Model
{
    use Notifiable;
    
    
    public  $detalles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'estadoPedido', 'formapago_id'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
//     User has to many orders
    public function user(){
        return $this->belongsTo('App/User');
    }
    
    /**
     *
     */
    public function detallesPedido() {
        return $this->hasMany('App\DetallePedido');
    }
    
    
}
