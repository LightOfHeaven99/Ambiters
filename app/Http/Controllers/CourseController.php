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
        return view('admin.newCourse');
    }
}
