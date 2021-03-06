<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    //Use next table
    protected $table='tbl_doctores';
    
    public function especialidad() {
    	return $this->hasOne('App\Especialidad','id','id_especialidad');
    }
    
    public function ubicacion() {
		return $this->belongsToMany('App\Ubicacion','tbl_doctores_ubicacion','id_doctor','id_ubicacion');	    
    }
    
    public function horarios($id_doctor) {
    	return $horarios = DB::table('tbl_doctores_ubicacion')
    								->join('tbl_horarios',function($join){
    									$join->on('tbl_doctores_ubicacion.id_doctor', '=',  'tbl_horarios.id_doctor');
                					$join->on('tbl_doctores_ubicacion.id_ubicacion','=', 'tbl_horarios.id_ubicacion');
    								})
									->join('tbl_dias','tbl_horarios.id_dia','=','tbl_dias.id')
									->join('tbl_horas AS hi','tbl_horarios.id_hora_inicio','=','hi.id')
									->join('tbl_horas AS hf','tbl_horarios.id_hora_fin','=','hf.id')    								
									->select('tbl_horarios.id_ubicacion','tbl_horarios.id_dia','tbl_horarios.id_hora_inicio','tbl_horarios.id_hora_fin','hi.hora as hora_inicio','hf.hora as hora_fin','tbl_dias.dia')    								
    								->where('tbl_doctores_ubicacion.id_doctor','=',$id_doctor)->get();								
    }
}
