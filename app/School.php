<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];

    public function students(){
    	return $this->hasMany(Student::class);
    }
}
