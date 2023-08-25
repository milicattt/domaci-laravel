<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrendResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
        'Id->'=>$this->resource->id,
        'Ime brenda->'=>$this->resource->imeBrenda,
        'Opis brenda->'=>$this->resource->opis,
        'Kategorija->'=>new KategorijaResource($this->resource->kategorija)
        ];
    }
}
