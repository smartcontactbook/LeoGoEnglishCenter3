<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    protected $table='table_level';
    protected $guarded= [];

    public function question()
    {
    	return $this->belongsTo('app\providers\question');
    }
}
