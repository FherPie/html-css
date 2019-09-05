<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    protected  $primaryKey = 'id_ubicaciones';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ubicaciones';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ubicaciones',
        'codigo',
        'nivel',
        'nombre',
        'padre'
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
        'version',
    ];
}
