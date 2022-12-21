<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FamiliaResource extends JsonResource
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
            'familia' => $this->familia,
            'ficha_familiar' => $this->sector.'-'.$this->ficha_familiar,
            'domicilio' => $this->domicilio,
            'sector' => $this->sector,
            'fono' => $this->fono,
            'num_integrantes' => $this->pacientes->count()
        ];
    }
}
