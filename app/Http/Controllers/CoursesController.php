<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeCourse;
use App\Course;

class CoursesController extends Controller

{
	public function index()
	{
		
		$courseLists = Course::all();

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

	    $Course = new Course($request->all());
	    if(!$Course->save()){
	    	session()->flash('message', 'Course NOT Saved');
	    return redirect()->back();
		}
		session()->flash('message', 'Course Saved Sucessfully');
		return redirect('/courses');
	    // return redirect('/courses/create');
    }
}
