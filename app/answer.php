<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table='answer';
    protected $guarded= [];
    public $timestamps = false;
    public function question()
    {
    	return $this->belongsTo('app\providers\question');
    }
}
