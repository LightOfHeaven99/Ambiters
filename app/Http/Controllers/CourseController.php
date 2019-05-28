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
        return view('admin.newCourse')->with('courses', $courses);
    }
}
