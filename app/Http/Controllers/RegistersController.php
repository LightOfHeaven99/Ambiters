<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registers;
use App\Course;

class RegistersController extends Controller
{
    public function create(Request $request){
        $register = new Registers();

        $register->user= $request->input('UserName');
        $register->userID= $request->input('UserID');
        $register->course= $request->input('CourseName');
        $register->courseID= $request->input('CourseID');
        $register->status="przyjeto";
        $register->save();
        $courses = Course::all();

        return view('index');

    }
}
