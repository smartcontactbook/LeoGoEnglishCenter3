<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $table='quiz';
    protected $guarded= [];
    public $timestamps = false;

    public function question()
    {
    	return $this->hasMany('app\providers\question');
    }

    public function lesson()
    {
    	return $this->belongsTo('app\providers\lesson');
    }

    public function tutor()
    {
    	return $this->belongsTo('app\providers\tutor');
    }
}
