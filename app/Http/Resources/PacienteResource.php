<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'rut' => $this->rut,
            'ficha' => $this->ficha,
            'nombres' => $this->nombres,
            'sector' => $this->sector,
        ];
    }
}
