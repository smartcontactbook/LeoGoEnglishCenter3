<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_room extends Model
{
    protected $table='class_room';
    protected $guarded= [];
    public $timestamps = false;

    public function class_weekday_room()
    {
    	return $this->hasMany('app\providers\class_weekday_room');
    }
}
