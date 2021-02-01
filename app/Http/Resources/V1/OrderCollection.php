<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [ 
            'data' => $this->collection->map(function ($order) use ($request) { 
                return (new OrderResource($order))->toArray($request); 
            }) 
        ]; 
    }
    public function with($request)
    {
        return [
            'included' => $this->collection->pluck('user')->unique()->values()->map(function ($user) {
                return new UserResource($user);
            })
        ];
    }
}
