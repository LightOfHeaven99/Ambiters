<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

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
        $course->discount=0;

        $course->save();
        $courses = Course::all();
        return view('admin.panel')->with('courses', $courses);
    }


    public function edit($id){
        $course =Course::find($id);
        return view('admin.edit')->with('course', $course);
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
