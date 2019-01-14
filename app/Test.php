<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
 	public function course_units()
 	{
 		return $this->hasMany(CourseUnitId::class);
 	}   
}
