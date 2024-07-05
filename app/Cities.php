<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $fillable = ['id','name','status','regions_id'];
    public $additional_attributes = ['full_name'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function getFullNameAttribute()
    {
        $Regions = Regions::find($this->regions_id);
        $States = States::find($Regions->states_id);
        //$Brands = Banks::where('id',$this->banks_id)->get();
        //$Brands->name;
        return "{$States->name} {$Regions->name} {$this->name}";
    }
}
