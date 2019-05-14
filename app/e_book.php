<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class e_book extends Model
{
    protected $table='e_book';
    protected $guarded= [];
    public $timestamps = false;

    public function course()
    {
    	return $this->belongsTo('app\course');
    }
}
