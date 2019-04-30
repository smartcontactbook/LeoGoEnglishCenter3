<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    public $timestamps = false;

    public function staff()
    {
    	return $this->belongsTo('app\staff');
    }
}
