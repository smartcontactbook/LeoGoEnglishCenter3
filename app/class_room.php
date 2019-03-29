<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_room extends Model
{
    protected $table='class_room';
    protected $guarded= [];
    public $timestamps = false;

    public function schedule()
    {
    	return $this->hasMany('app\schedule');
    }
}
