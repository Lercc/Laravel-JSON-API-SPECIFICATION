<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'type' => 'order',
            'id'   => (string) $this->id,
            'attributes' => [
                'id' => $this->id,
                'usuario_id' => $this->user_id,
                'monto_total' => $this->amound,
                'fecha_creación' => $this->created_at,
                'fecha_actualización' => $this->updated_at,
            ],
            'relationships' => [
                'user' => [
                    'data' => [
                        'type'  => 'user',
                        'id'    => (string) $this->user_id
                    ],
                    'links'=>[
                        'self' => route('users.show',$this->user_id),
                        'related' => route('orders.show',$this->id),
                    ]
                ]
            ],
            'links' => [
                'self' => route('orders.show',$this->id),
            ]
        ];
    }
    public function with($request)
    {
        return ['included' => [new UserResource($this->user)]];
    }
}
