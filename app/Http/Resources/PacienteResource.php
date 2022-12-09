<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

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
            'nombres' => ucfirst($this->nombres ?? '').' '.ucfirst($this->apellidoP ?? '').' '.ucfirst($this->apellidoM ?? ''),
            'sector' => $this->sector,
            'edad' => Carbon::parse($this->fecha_nacimiento)->age
        ];
    }
}
