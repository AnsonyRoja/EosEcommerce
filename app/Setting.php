<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['id','key','display_name','value','details','type','order','group'];

    public $timestamps = false;
}
