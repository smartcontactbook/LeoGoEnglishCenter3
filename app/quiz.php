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
    	return $this->hasMany('app\question');
    }

    public function lesson()
    {
    	return $this->belongsTo('app\lesson');
    }

    public function tutor()
    {
    	return $this->belongsTo('app\tutor');
    }
}
