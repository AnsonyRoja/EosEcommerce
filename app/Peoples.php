<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peoples extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
}
