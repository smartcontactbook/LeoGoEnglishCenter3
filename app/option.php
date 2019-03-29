<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    protected $table='level';
    protected $guarded= [];
    public $timestamps = false;

    public function question()
    {
    	return $this->belongsTo('app\question');
    }
}
