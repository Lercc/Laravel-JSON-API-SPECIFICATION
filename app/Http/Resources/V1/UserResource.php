<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'type' => 'user',
            'id'   => (string) $this->id,
            'attribute' => [
                'id' => $this->id,
                'nombre' => $this->name
            ],
            'links' => [
                'self' => route('orders.show',$this->id),
            ]
        ];
    }
}
