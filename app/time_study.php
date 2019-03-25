<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time_study extends Model
{
    protected $table='time_study';
    protected $guarded= [];
    public $timestamps = false;

    public function schedule()
    {
    	return $this->hasMany('app\providers\schedule');
    }
}
