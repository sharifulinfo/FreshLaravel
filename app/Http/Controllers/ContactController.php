<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
    	return view('admin.contact.create');
    }

    public function store(){
    	$data = request()->validate([
    		'name' => 'required',
    		'phone' => 'required',
    		'message' => 'required',
    	]);

    	Mail::to('test@gmail.com')->send(new ContactMail($data));

    	return redirect('home')->with('message','Email Send Successed!');
    }
}
