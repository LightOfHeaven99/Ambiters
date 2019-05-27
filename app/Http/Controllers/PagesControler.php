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

    public function addCourse(){
      return view('admin.newCourse');
    }
}
