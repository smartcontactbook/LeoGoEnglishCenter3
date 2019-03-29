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
    	return $this->belongsTo('app\children');
    }

    public function leogo_class()
    {
    	return $this->belongsTo('app\leogo_class');
    }
}
