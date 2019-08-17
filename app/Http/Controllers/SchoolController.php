<?php

namespace App\Http\Controllers;
use App\School;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
	private function validateRequest(){
		return request()->validate([
    		'name'	=> 'required|min:3',
    		'phone'	=> 'required',
            'image' => 'sometimes|file|image',
    	]);
	}

    public function index(){
    	$data['schools'] = School::all();
    	return view('admin.school.index',$data);
    }

    public function create(){
    	$school = New School;
    	return view('admin.school.create',compact('school'));
    }

    public function store(){
    	$school = School::create($this->validateRequest());
        $this->uploadImage($school);
    	return redirect('schools')->with('message','Inserted Success!');
    }

    public function show(School $school){
    	return view('admin.school.show',compact('school'));
    }

	public function edit(School $school){
		return view ('admin.school.edit',compact('school'));
	}

	public function update(School $school){
    	$school->update($this->validateRequest());
        $this->uploadImage($school);
    	return redirect('schools')->with('message','updated Success!');
	}

	public function destroy(School $school){
		$school->delete();
		return redirect('schools')->with('message','Deleted Success!');
	}

    private function uploadImage($school){
        if(request()->has('image')){
            $school->update([
                'image' => request()->image->store('uploads','public'),
            ]);

            // if(file_exists(asset('storage/uploads/'.$school->image)) AND !empty($school->image)){ 
            //     unlink(asset('storage/uploads/'.$school->image));
            //  } 
        }
    }
}
