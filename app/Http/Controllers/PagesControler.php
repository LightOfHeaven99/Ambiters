<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class PagesControler extends Controller
{
    public function index(){
        return view('index');
    }

    public function registerNavbar(){
        return view('register');
    }

    public function faq(){
        return view('faq');
    }

    public function addCourse(){
      $courses = Course::all();
      return view('admin.newCourse')->with('courses',$courses);;
    }
}
