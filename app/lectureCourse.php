<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lectureCourse extends Model
{
    public function lecturers()
    {
    	return $this->hasMany(lecturer_id::class);
    }

    public function course_units()
    {
    	return $this->hasMany(course_unit_id::class);
    }
}
