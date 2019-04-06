<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tem_children extends Model
{
    protected $table='tem_children';
    protected $guarded= [];
    public $timestamps = false;

    public function level()
    {
    	return $this->belongsTo('app\level');
    }

    public function course()
    {
    	return $this->belongsTo('app\course');
    }

    public function children()
    {
    	return $this->belongsTo('app\children');
    }
}
