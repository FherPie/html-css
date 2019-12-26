<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigos extends Model
{
 
    protected  $primaryKey = 'id_codigos';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'codigos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_codigos',
        'codigo', 'descripcion', 
        'nombre',
        'parametros',
        'maestro'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'fecha_creacion', 'fecha_modificacion',
         'usuario_creacion',
         'usuario_modificacion',
         'version'
    ];
    
}
