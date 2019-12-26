<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = [
        'callePrimaria', 'calleSecundaria', 'referencia','user_id', 'ubicacion_id', 'numero'
    ];
    
}
