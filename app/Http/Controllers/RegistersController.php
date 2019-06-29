<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registers;
use App\Course;

class RegistersController extends Controller
{
    public function create(Request $request){
        $register = new Registers();

        $course = Course::find($request->input('CourseID'));
        if($course->registered>= $course->slots){
          return view('index');
        }

        $register->user= $request->input('UserName');
        $register->userID= $request->input('UserID');
        $register->course= $request->input('CourseName');
        $register->courseID= $request->input('CourseID');
        $register->price= $request->input('price');
        $register->status="przyjeto";
        $register->save();
        $courses = Course::all();

        $data = \App\Registers::where('courseID', $course->id);
        $course -> registered = $data->count();
        $course ->save();

        return view('index');

    }

    public function update(Request $request){
      $id = $request->input('id');
      $courseID = $request->input('courseID');
      $course = Course::find($courseID);
      $register = Registers::find($id);
      if($register!=null){
        $register -> status = "opłacony";
        $register->save();
      }
      $registers = Registers::all()->where('courseID', $courseID);
      return view('admin.show', ['course'=> $course,
                                  'registers'=> $registers
                                ]);
    }
}
