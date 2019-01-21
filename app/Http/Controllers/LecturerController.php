<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeLecturer;
use App\lecturer;


class LecturerController extends Controller
{
    public function index()
    {
    	$lecturerList = lecturer::all();

    	return view('lecturer.lecturerList',compact('lecturerList'));
    }

    public function create()
    {
    	return view('lecturer.lecturer');
    }

    public function store(storeLecturer $request)
    {
    	$lecturer = new lecturer($request->all());
    	if(!$lecturer->save())
    	{
    		session()->flash('message','Lecturer not Saved');
    		return redirect()->back();
    	}
    	session()->flash('message','Lecturer Saved Successfully');
    	return redirect('/lecturer');
    	
    }
}
