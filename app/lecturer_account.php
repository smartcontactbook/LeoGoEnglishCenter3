<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer_account extends Model
{
  	protected $table='lecturer_account';
    protected $guarded= [];
    public $timestamps = false;

    public function lecturer()
    {
    	return $this->belongsTo('app\providers\lecturer');
    }
}
