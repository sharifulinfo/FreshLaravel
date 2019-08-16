<?php

namespace App\Http\Controllers;
use App\Student;
use App\School;
use Illuminate\Http\Request;
use App\Http\Requests\StudentForm;

class StudentController extends Controller
{
    public function studentList(){
    	$data['active_students'] = Student::active()->get();
    	$data['Inactive_students'] = Student::inactive()->get();
    	$data['schools'] = School::all();
    	return view('admin.students', $data);
    }

    public function store(StudentForm $request){
		$data = $request->validated();
    	Student::create($data);
    	return back();
    }
}
