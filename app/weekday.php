<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weekday extends Model
{
    protected $table='weekday';
    protected $guarded= [];
    public $timestamps = false;

    public function schedule()
    {
    	return $this->hadMany('app\schedule');
    }
}
