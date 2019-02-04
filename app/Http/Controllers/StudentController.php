<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\storeStudent;
use App\Student;

class StudentController extends Controller
{
    

	public function index()
	{
        $studentList = Student::all();

        return view('students.studentList',compact('studentList'));

	}

    public function create()
    {
    	return view('students.student');
    }

    public function store(storeStudent $request)
    {
    	// dd($request);
    	$student = new Student($request->all());
    	if($student->save())
    	{
    		session()->flash('message','Failed to Save');
    		return redirect()->back();
    	}
    	session()->flash('message','Student saved Successfully');
    	return redirect()->back();
    }
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);

        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
