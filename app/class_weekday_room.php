<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_weekday_room extends Model
{
    protected $table='table_class_weekday_room';
    protected $guarded= [];

    public function class_room()
    {
    	return $this->belongsTo('app\providers\class_room');
    }

    public function class()
    {
    	return $this->belongsTo('app\providers\class');
    }

    public function weekday()
    {
    	return $this->belongsTo('app\providers\weekday');
    }
}
