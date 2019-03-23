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
    	return $this->hasMany('app\providers\option');
    }

    public function answer()
    {
    	return $this->hasMany('app\providers\answer');
    }

    public function quiz()
    {
    	return $this->belongsTo('app\providers\quiz');
    }
}
