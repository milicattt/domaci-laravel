<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatikaResource extends JsonResource
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
            'Id->'=>$this->resource->id,
            'Ime->'=>$this->resource->ime,
            'URL slike->'=>$this->resource->url_slike,
            'Opis->'=>$this->resource->opis,
            'Cena->'=>$this->resource->cena,
            'Brend->'=>new BrendResource($this->resource->brend),
            'User->'=>new UserResource($this->resource->user)
        ];
    }
}
