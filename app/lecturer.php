<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    protected $table='lecturer';
    protected $guarded= [];
    public $timestamps = false;

    public function lecturer_account()
    {
    	return $this->hasOne('app\lecturer_account');
    }

    public function leogo_class()
    {
    	return $this->hasMany('app\leogo_class');
    }
}
