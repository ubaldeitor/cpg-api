<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UbicacionResource extends JsonResource
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
          'descripcion' => $this->descripcion,
          'calle_numero' => $this->calle_numero,
          'colonia' => $this-> colonia,
          'codigo_postal' =>$this->codigo_postal,
          'alcaldia'=>$this->alcaldia,
          'ciudad' => $this->ciudad,
          'estado' => $this->estado,
          'contactos'=> $this->contactos,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at
        ];
    }
}
