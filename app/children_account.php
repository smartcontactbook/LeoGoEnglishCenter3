<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children_account extends Model
{
    protected $table='children_account';
    protected $guarded= [];
    public $timestamps = false;

    public function children()
    {
    	return $this->belongsTo('app\providers\children');
    }
}
