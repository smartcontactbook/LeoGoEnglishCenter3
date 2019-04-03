<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tem_children_class extends Model
{
    protected $table='tem_children_class';
    protected $guarded= [];
    public $timestamps = false;

    public function level()
    {
    	return $this->belongsTo('app\level');
    }
}
