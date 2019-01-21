<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\storeStudent;
use App\StudentModel;

class StudentController extends Controller
{
	public function index()
	{

	}

    public function create()
    {
    	return view('students.student');
    }

    public function store(storeStudent $request)
    {
    	dd($request);
    	$student = new StudentModel($request->all());
    	if($student->save())
    	{
    		session()->flash('message','Failed to Save');
    		return redirect()->back();
    	}
    	session()->flash('message','Student saved Successfully');
    	return redirect()->back();
    }
}
