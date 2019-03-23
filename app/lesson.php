<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $table='table_lesson';
    protected $guarded= [];

    public function quiz()
    {
    	return $this->hasMany('app\providers\quiz');
    }

    public function course()
    {
    	return $this->belongsTo('app\providers\course');
    }
}
