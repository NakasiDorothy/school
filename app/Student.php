<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    pubic function course_units()
    {
    	return $this->hasMany(CourseUnitId::class);
    }
}
