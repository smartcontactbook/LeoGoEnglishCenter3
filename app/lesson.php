<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $table='lesson';
    protected $guarded= [];
    public $timestamps = false;

    public function quiz()
    {
    	return $this->hasMany('app\quiz');
    }

    public function course()
    {
    	return $this->belongsTo('app\course');
    }
}
