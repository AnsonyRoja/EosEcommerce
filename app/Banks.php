<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    public $table = "banks";
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
}
