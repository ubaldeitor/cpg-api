<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //Use next table
    protected $table='tbl_ubicaciones';
    
    public function contactos() {
		return $this->belongsToMany('App\Contacto','tbl_ubicacion_contacto','id_ubicacion','id_contacto');	    
    }
    
}
