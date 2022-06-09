<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CursosResource extends JsonResource
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
                'id'=>$this->id,
                'nombre'=>$this->nombre,
                'fecha_inicio'=>$this->fecha_inicio,
                'fecha_fin'=>$this->fecha_fin
            ];
    }
}
