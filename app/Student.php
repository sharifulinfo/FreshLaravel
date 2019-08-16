<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded  = [];

    public function scopeActive($query){
    	return $query->where('status','Active');
    }

    public function scopeInactive($query){
    	return $query->where('status','Inactive');
    }

    public function school(){
    	return $this->belongsTo(School::class);
    }
}
