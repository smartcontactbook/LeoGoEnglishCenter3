<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table='events';
    protected $guarded= [];
    public $timestamps = false;

    public function staff()
    {
    	return $this->belongsTo('app\staff');
    }

    public function event_detail()
    {
        return $this->hadMany('app\event_detail');
    }
}
