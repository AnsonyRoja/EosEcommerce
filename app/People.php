<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = ['id', 'rif', 'name', 'sex', 'birthdate','cities_id','phone','phone_home'];

}
