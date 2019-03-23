<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $table='table_quiz';
    protected $guarded= [];

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
