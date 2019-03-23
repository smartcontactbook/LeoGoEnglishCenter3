<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children extends Model
{
    protected $table='table_children';
    protected $guarded= [];

    public function children_account()
    {
    	return $this->hasOne('app\providers\children_account');
    }

    public function children_class()
    {
    	return $this->hasMany('app\providers\children_class');
    }

    public function payment()
    {
    	return $this->hasMany('app\providers\payment');
    }

     public function course()
    {
        return $this->belongsTo('app\providers\course');
    }
}
