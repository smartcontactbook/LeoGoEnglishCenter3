<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_user extends Model
{
    protected $table='history_user';
    protected $guarded= [];
    public $timestamps = false;

    public function leogo_class()
    {
    	return $this->belongsTo('app\leogo_class');
    }

    public function children()
    {
    	return $this->belongsTo('app\children');
    }
}