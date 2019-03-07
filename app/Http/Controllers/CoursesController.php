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

	    $course = new Course($request->all());
	    if(!$course->save()){
	    	session()->flash('message', 'Course NOT Saved');
	    return redirect()->back();
		}
		session()->flash('message', 'Course Saved Sucessfully');
		return redirect('/courses');
	    // return redirect('/courses/create');
    } /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);

        return view ('courses.show_course', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        return view ('courses.edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course ->update($request->all());

       	if(!$course ->save()) 
       	{
       		return redirect()->back();
       	}
       	return redirect('/courses');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	dd('here');
        $course = Course::find($id);

        $course->delete();

        return redirect('/courses');
    }
}
