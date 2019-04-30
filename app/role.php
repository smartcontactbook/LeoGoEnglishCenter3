<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table='role';
    protected $guarded= [];
    public $timestamps = false;

    public function staff()
    {
    	return $this->hadMany('app\staff');
    }

    public function children()
    {
    	return $this->hadMany('app\children');
    }

}
