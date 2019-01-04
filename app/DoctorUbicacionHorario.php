<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorUbicacionHorario extends Model
{
    // Use next table
    protected $table='tbl_doctores_ubicacion_horario';
    
    public function horario(){
    	  return $this->hasOne('App\Horario','id','id_horario');	    
    }
    
    public function doctor(){
    	return $this->hasOne('App\Doctor', 'id', 'id_doctor');
    }
    
    public function ubicacion(){
    	return $this->hasOne('App\Ubicacion','id', 'id_ubicacion');
    }
}
