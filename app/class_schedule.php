<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_schedule extends Model
{
    protected $table='class_schedule';
    protected $guarded= [];
    public $timestamps = false;

    public function schedule()
    {
    	return $this->belongsTo('app\schedule');
    }

    public function leogo_class()
    {
    	return $this->belongsTo('app\leogo_class');
    }
}
