<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function create(Request $request){
        $course = new Course;
        $course->title=$request->input('title');
        $course->prize=$request->input('prize');

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
        $course->prize=$request->input('prize');

        $course->save();
        $courses = Course::all();
        return view('admin.panel')->with('courses', $courses);
    }
}
