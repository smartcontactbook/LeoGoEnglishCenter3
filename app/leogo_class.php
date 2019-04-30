<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leogo_class extends Model
{
    protected $table='leogo_class';
    protected $guarded= [];
    public $timestamps = false;

    public function payment()
    {
    	return $this->hasMany('app\payment');
    }
    
    public function history_user()
    {
        return $this->hasMany('app\history_user');
    }

    public function class_weekday_room()
    {
    	return $this->hasMany('app\class_weekday_room');
    }

    public function children_class()
    {
    	return $this->hasMany('app\children_class');
    }

    public function lecturer()
    {
    	return $this->belongsTo('app\staff');
    }

    public function tutor()
    {
    	return $this->belongsTo('app\staff');
    }

    public function level()
    {
    	return $this->belongsTo('app\level');
    }

    public function children()
    {
        return $this->hasMany('app\children');
    }
}
