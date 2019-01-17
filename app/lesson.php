<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    public function courses()
    {
    	return $this->hasOne(course_id::class);
    }
    public function course_units()
    {
    	return $this->hasMany(course_unit_id::class);
    }
}
