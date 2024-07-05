<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Banks;
class BankDatas extends Model
{
    public $additional_attributes = ['full_name'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function getFullNameAttribute()
    {
        $Brands = Banks::find($this->banks_id);
        //$Brands = Banks::where('id',$this->banks_id)->get();
        //$Brands->name;
        return "{$Brands->name} {$this->description}";
    }

}


