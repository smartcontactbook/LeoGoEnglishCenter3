<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table='table_answer';
    protected $guarded= [];

    public function question()
    {
    	return $this->belongsTo('app\providers\question');
    }
}
