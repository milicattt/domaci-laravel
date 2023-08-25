<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KategorijaResource extends JsonResource
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
            'ID->'=>$this->resource->id,
            'Naziv->'=>$this->resource->naziv,
            'Slug->'=>$this->resource->slug,
            'Opis->'=>$this->resource->opis
        ];
    }
}
