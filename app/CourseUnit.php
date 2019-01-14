<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Unit extends Model
{
    public function lecturers()
    {
    	return $this->hasMany(lecturerId::class);
    }
}
