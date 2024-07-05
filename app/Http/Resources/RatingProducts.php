<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingProducts extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'products_id'  =>  $this->products_id,
            'users_id'  =>  $this->users_id,
            'rating'    =>$this->rating,
            'opinion'   =>$this->opinion,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
