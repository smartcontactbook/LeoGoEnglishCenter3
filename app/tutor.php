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

    public function leogo_class()
    {
    	return $this->hasMany('app\leogo_class');
    }

    public function quiz()
    {
    	return $this->hasMany('app\quiz');
    }

    public function role()
    {
        return $this->belongsTo('app\role');
    }
}