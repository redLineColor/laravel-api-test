<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'name'         => $this->name,
            'slug'         => $this->slug,
            'status'       => $this->status,
            'some_column0' => $this->some_column0,
            'some_column1' => $this->some_column1,
            'some_column2' => $this->some_column2,
            'some_column3' => $this->some_column3,
            'some_column4' => $this->some_column4,
            'some_column5' => $this->some_column5,
            'another'      => 'another',
        ];
    }

    public function with($request): array
    {
        return [
            'api_version' => '0.0.1',
            'author'      => 'redLineColor',
        ];
    }
}
