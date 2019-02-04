<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\storeLecturer;
use App\lecturer;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LecturerController extends Controller
{
    // public function authenticate(Request $request)
    // {
    //     // get params from the request (username and password)
    //     $email = $request->email;
    //     $password = $request->password;
    //     // look into the lecturers table for a record that matches the params
    //     $lecturer = lecturer::where('username', $username)->where('password', $password)->first();
    // $lecturer = lecturer::where('username', $request->username)->where('password', $request->password)->first();
    //     // if a row exists, it means user exist and credentials(i.e param) are correct
    //     if ($lecturer) {
    //         Auth::login($lecturer);
    //     }else {
    //         return back()->withErrors(['Credentials donot match our records']);
    //     }
    // }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecturer = lecturer::find($id);

        return view('lecturer.show',compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
