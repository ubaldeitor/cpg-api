<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
          'id'=>$this->id,
          'apellido_paterno' => $this->apellido_paterno,
          'apellido_materno' => $this->apellido_materno,
          'nombre' => $this-> nombre,
          'especialidad' =>$this->especialidad,
          'ubicaciones'=>$this->ubicacion,
          'url_foto' => $this->url_foto,
          'experiencia' => $this->experiencia,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at
        ];
    }
}
