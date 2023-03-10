<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "order_id" => $this->id,
            "user" => $this->user->email,
            "order_status" => $this->getStatus(),
            "order_items" => $this->orderItem,
            "order_items" => $this->price,
        ];
    }
}
