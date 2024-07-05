<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'id' => $this->id,
            'EAN' => $this->EAN,
            'brands_id' => $this->brands_id,
            'description' => $this->description,
            'description_short' => $this->description_short,
            'discount' => $this->discount,
            'keyword' => $this->keyword,
            'name' => $this->name,
            'price' => $this->price,
            'sub_categories_id' => $this->sub_categories_id,
            'promote' => $this->promote,
            'qty_avaliable' => $this->qty_avaliable,
            'qty_sold' => $this->qty_sold,
            'qty_view' => $this->qty_view,
            'qty_max' => $this->qty_max,
            'qty_min' => $this->qty_min,
            'record' => $this->record,
            'status' => $this->status,
            'stores_id' => $this->stores_id,
            'photo' => $this->photo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
