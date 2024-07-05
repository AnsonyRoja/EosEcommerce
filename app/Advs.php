<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advs extends Model
{
    protected $table = 'advs';
    
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
}
