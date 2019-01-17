<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeCourse;
use App\course;

class CoursesController extends Controller

{
	public function index()
	{
		$courseLists = course::all();

		return view('courses.courseLists',compact('courseLists'));
	}
    public function create()
    {
    	return view('courses.courses');
    } 

    public function store(storeCourse $request)
    {	
    	// dd($request->all());
    	// $request->validate([
	    //     'course_code' => 'required',
	    //     'course_name' => 'required'
	    // ]);

	    $course = new course($request->all());
	    if(!$course->save()){
	    	session()->flash('message', 'Course NOT Saved');
	    return redirect()->back();
		}
		session()->flash('message', 'Course Saved Sucessfully');
		return view('courses.courseLists');
	    // return redirect('/courses/create');
    }
}
