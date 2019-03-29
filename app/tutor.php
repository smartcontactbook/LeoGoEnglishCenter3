<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    protected $table='tutor';
    protected $guarded= [];
    public $timestamps = false;

    public function tutor_account()
    {
    	return $this->hasOne('app\tutor_account');
    }

    public function class()
    {
    	return $this->hasMany('app\class');
    }

    public function quiz()
    {
    	return $this->hasMany('app\quiz');
    }
}