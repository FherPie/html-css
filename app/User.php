<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cedula', 'celular', 'nombreCompleto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the comments for the blog post.
     */
    public function direcciones()
     {
        return $this->hasMany('App\Direccion');
     }
     
     
     /**
      * Get the comments for the blog post.
      */
     public function pedidos()
     {
         return $this->hasMany('App\Pedido');
     }
}
