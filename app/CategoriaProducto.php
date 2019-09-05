<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
 
    protected  $primaryKey = 'id_categoria_producto';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categoria_producto';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_categoria_producto', 'codigo', 
        'color',
        'nombre'
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
    
    
    public function subCategoriasProducto() {
        return $this->hasMany('App\SubCategoriaProducto',"id_categoria_producto");
    }
    
}
