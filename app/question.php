<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table='table_question';
    protected $guarded= [];

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
