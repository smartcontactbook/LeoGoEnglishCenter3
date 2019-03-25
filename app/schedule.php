<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table='schedule';
    protected $guarded= [];
    public $timestamps = false;

    public function time_study()
    {
    	return $this->belongsTo('app\providers\time_study');
    }

    public function weekday()
    {
    	return $this->belongsTo('app\providers\weekday');
    }

    public function class_room()
    {
    	return $this->belongsTo('app\providers\class_room');
    }
}
