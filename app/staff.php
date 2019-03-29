<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table='staff';
    protected $guarded= [];
    public $timestamps = false;

    public function staff_account()
    {
    	return $this->hasOne('app\staff_account');
    }
//
}
