<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
 
    protected  $primaryKey = 'id_producto';
    
    public  $detallesArchivos;
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
        'precio_referencial_venta',
        'indicador_vista_tienda',
        'id_sub_categoria_producto'
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
    
    
    public function detallesPedido() {
        return $this->hasMany('App\DetallePedido');
    }
    
    
    public function detallesArchivo() {
        return $this->hasMany('App\Archivo', 'producto_id', "id_producto");
    }
}
