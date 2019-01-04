<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorUbicacionHorarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
			'nombre' => $this->nombre,
			'apellido_paterno' => $this->apellido_paterno,
			'apellido_materno' => $this->apellido_materno,
			'especialidad'=> $this->especialidad,        
        'ubicaciones' => UbicacionResource::collection($this->ubicacion),
        'horarios' => $this->horarios($this->id)        
        ];
    }
}
