<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment';
    protected $guarded= [];
    public $timestamps = false;

    public function payment_method()
    {
    	return $this->belongsTo('app\payment_method');
    }

    public function children()
    {
    	return $this->belongsTo('app\children');
    }

    public function leogo_class()
    {
    	return $this->belongsTo('app\leogo_class');
    }
}
