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
    	return $this->hadMany('app\providers\course');
    }
}
