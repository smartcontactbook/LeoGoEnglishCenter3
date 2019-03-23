<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weekday extends Model
{
    protected $table='table_weekday';
    protected $guarded= [];

    public function class_weekday_room()
    {
    	return $this->hadMany('app\providers\class_weekday_room');
    }
}
