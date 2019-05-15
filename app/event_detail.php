<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_detail extends Model
{
    protected $table='event_detail';
    protected $guarded= [];
    public $timestamps = false;

    public function events()
    {
    	return $this->belongsTo('app\events')->withTrashed();
    }
}
