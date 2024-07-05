<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
}
