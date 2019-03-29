<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table='question';
    protected $guarded= [];
    public $timestamps = false;

    public function option()
    {
    	return $this->hasMany('app\option');
    }

    public function answer()
    {
    	return $this->hasMany('app\answer');
    }

    public function quiz()
    {
    	return $this->belongsTo('app\quiz');
    }
}
