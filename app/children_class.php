<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children_class extends Model
{
    protected $table='table_children_class';
    protected $guarded= [];

    public function children()
    {
    	return $this->belongsTo('app\providers\children');
    }

    public function class()
    {
    	return $this->belongsTo('app\providers\class');
    }
}
