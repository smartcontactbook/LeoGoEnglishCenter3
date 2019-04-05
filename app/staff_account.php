<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff_account extends Model
{
    protected $table='staff_account';
    protected $guarded= [];
    public $timestamps = false;

    public function staff()
    {
    	return $this->belongsTo('app\staff');
    }
}
