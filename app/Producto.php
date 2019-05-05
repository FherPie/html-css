<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
 
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producto';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_producto', 'activo', 
        'codigo',
        'codigo_barras',
        'descripcion',
        'id_organizacion',
        'id_sucursal',
        'imagen',
        'informacion_adicional',
        'nombre',
        'nombre_comercial',
        'peso',
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
