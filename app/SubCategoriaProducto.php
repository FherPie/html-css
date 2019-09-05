<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoriaProducto extends Model
{
 
    protected  $primaryKey = 'id_subcategoria_producto';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sub_categoria_producto';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_subcategoria_producto', 
        'codigo', 
        'descripcion',
        'nombre',
        'id_categoria_producto'
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
    
    //     Categoria has to many subcategorias
    public function categoriaProducto(){
        return $this->belongsTo('App\CategoriaProducto', 'id_categoria_producto');
    }
    
}
