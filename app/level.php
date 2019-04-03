<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table='level';
    protected $guarded= [];
    public $timestamps = false;

    public function course()
    {
    	return $this->hadMany('app\course');
    }

    public function tem_children_class()
    {
    	return $this->hadMany('app\tem_children_class');
    }

    public function leogo_class()
    {
    	return $this->hasMany('app\leogo_class');
    }
}
