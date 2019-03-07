<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use Image;
use Illuminate\Http\Request;
// use Illuminate\Intervention\ImageServiceProvider;
// use Intervention\Image\Facades\Image;    
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;
// use Vendor\Symfony\Http\Foundation\File\UploadedFile;
// use vendor\intervention\image\src\Intervention\Image;
use App\Http\Requests\storeLecturer;
use App\Lecturer;

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
    	$lecturerList = Lecturer::all();

    	return view('lecturer.lecturerList',compact('lecturerList'));
    }


    public function create()
    {
    	return view('lecturer.lecturer');
    }

    // public function store(storeLecturer $request)
    // {   
        
    	
    //     $lecturer = new Lecturer($request->all());

        
    //     if(!$lecturer->save())
    // 	{
    // 		session()->flash('message','Lecturer not Saved');
    // 		return redirect()->back();
    // 	}
    // 	session()->flash('message','Lecturer Saved Successfully');
    // 	return redirect('/lecturer');
    	
    // }

     public function store(storeLecturer $request)

    {   
        $originalImage= $request->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
        // $profile = $request->file('filename');
        // // dd($profile);
        // $extension = $profile->getClientOriginalExtension();
        // Storage::disk('public')->put($profile->getFilename().'.'.$extension,  File::get($profile));

        // $lecturer = new Lecturer();
        // $lecturer->f_name = $request->f_name;
        // $lecturer->l_name = $request->l_name;
        // $lecturer->phone_no = $request->phone_no;
        // $lecturer->email = $request->email;
        // $lecturer->address = $request->address;
        // $lecturer->password = $request->password;
        // $lecturer->mime=$profile->getClientMimeType();
        // $lecturer->original_filename = $profile->getClientOriginalName();
        // $lecturer->filename = $profile->getFilename().'.'.$extension; 

        
        // if(!$lecturer->save())
        // {
        //     session()->flash('message','Lecturer not Saved');
        //     return redirect()->back();
        // }
        // session()->flash('message','Lecturer Saved Successfully');
        // return redirect('/lecturer');
        $lecturer =  new Lecturer($request->all());

         $lecturer->filename=time().$originalImage->getClientOriginalName();

        // $lecturer->update();

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
        $lecturer = Lecturer::find($id);

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
        $lecturer = Lecturer::find($id);

        return view('lecturer.edit', compact('lecturer'));
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
        $lecturer = Lecturer::find($id);

        $lecturer->update($request->all());

        if(!$lecturer->save())
        {
            return redirect()->back();
        }
        return redirect('/lecturer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecturer = Lecturer::find($id);

        $lecturer->delete();

        return redirect('/lecturer');
    }
}
