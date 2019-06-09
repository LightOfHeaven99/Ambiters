<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class PagesControler extends Controller
{
    public function index(){
        return view('index');

    }

    public function courses(){

        return view('courses');
    }

    public function registerNavbar(){
        return view('register');
    }

<<<<<<< HEAD
    public function panel(){
=======
    public function faq(){
        return view('faq');
    }

    public function addCourse(){
>>>>>>> e1fb838db16e9ee08d04638540c723ba66f870c6
      $courses = Course::all();
      return view('admin.panel')->with('courses',$courses);
    }

    public function newCourse(){
      return view('admin.newCourse');
    }
}
