<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class extends Model
{
    protected $table='table_class';
    protected $guarded= [];

    public function payment()
    {
    	return $this->hasMany('app\providers\payment');
    }

    public function class_weekday_room()
    {
    	return $this->hasMany('app\providers\class_weekday_room');
    }

    public function children_class()
    {
    	return $this->hasMany('app\providers\children_class');
    }

    public function lecturer()
    {
    	return $this->belongsTo('app\providers\lecturer');
    }

    public function tutor()
    {
    	return $this->belongsTo('app\providers\tutor');
    }

    public function course()
    {
    	return $this->belongsTo('app\providers\course');
    }

    public function children()
    {
        return $this->hasMany('app\providers\children');
    }
}
