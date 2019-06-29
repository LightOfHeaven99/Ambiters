<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Registers;

class CourseController extends Controller
{
    public function create(Request $request){
        $course = new Course;
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->slots=$request->input('slots');
        $course->registered =0;
        $course->discount=0;

        $image = $request->file('image');
        $imageName = $request->input('title') . '.' . $image->getClientOriginalExtension();
        $course->img=$imageName;
        $destinationPath = public_path('/img/courses');
        $image->move($destinationPath, $imageName);

        $course->save();
        $courses = Course::all();
        return view('admin.panel')->with('courses', $courses);
    }


    public function edit(Request $request){
        $id = $request->input('id');
        $course =Course::find($id);
        return view('admin.edit')->with('course', $course);
    }

    public function show(Request $request){
        $id = $request->input('id');
        $course = Course::find($id);
        $registers = Registers::all()->where('courseID', $id);
        return view('admin.show', ['course'=> $course,
                                    'registers'=> $registers
                                  ]);
    }


    public function update(Request $request){
        $id = $request->input('id');
        $course =Course::find($id);
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->discount=$request->input('discount');
        $course->slots=$request->input('slots');

        $course->save();
        $courses = Course::all();
        return view('admin.panel')->with('courses', $courses);
    }

    public function delete(Request $request){
      $id = $request->input('id');
      $course =Course::find($id);
      if($course!=null){
        $course ->delete();
      }
      $courses =Course::all();
      return view('admin.panel')->with('courses', $courses);
    }
}
