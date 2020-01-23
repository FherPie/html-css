<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listadoMarcas extends Model
{
    protected $table ='marca';
	protected $primaryKey='id_marca';
	
	public $timestamps= false;
	protected $fillable=['fecha_creacion','fecha_modificacion','usuario_creacion','usuario_modificacion','version', 'codigo', 'descripcion', 'nombre','parametros'];
	
	protected $guarded=[];
}
