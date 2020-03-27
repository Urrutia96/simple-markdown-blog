<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Blog extends JsonResource
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
            'titulo'      => $this->titulo,
            'slug'        => $this->slug,
            'descripcion' => $this->descripcion,
            'content'     => parsedown($this->content)
        ];
    }
}
