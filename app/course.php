<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table='course';
    protected $guarded= [];
    protected $fillable = ['Course_Name', 'Description', 'Term', 'Level_ID'];
    public $timestamps = false;

    public function lesson()
    {
    	return $this->hasMany('app\lesson');
    }

    public function leogo_class()
    {
    	return $this->hasMany('app\leogo_class');
    }

    public function level()
    {
    	return $this->belongsTo('app\level');
    }

    public function tem_children()
    {
        return $this->hadMany('app\tem_children');
    }
}
