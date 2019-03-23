<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children_class extends Model
{
    protected $table='children_class';
    protected $guarded= [];
    public $timestamps = false;

    public function children()
    {
    	return $this->belongsTo('app\providers\children');
    }

    public function class()
    {
    	return $this->belongsTo('app\providers\class');
    }
}
