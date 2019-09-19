<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Registers;
use Illuminate\Support\Facades\Auth;

class PagesControler extends Controller
{
    public function index(){
      $courses = Course::all()->where('status', true);
      return view('index')->with('courses',$courses);
  }

    public function courses(){
        $courses = Course::all();
        return view('courses')->with('courses',$courses);
    }

    public function registerNavbar(){
        return view('register');
    }

    public function faq(){
        return view('faq');
    }

    public function panel(){
      $id = Auth::id();
      $user = User::find($id);
      $courses = Course::all()->where('status', true);
      if($user==null){
        return view('index')->with('courses',$courses);
      }
      if($user->email != "okragly.rafal@gmail.com" && $user->email != "kajetan.fadrowski@gmail.com"){
        return view('index')->with('courses',$courses);
      }
      else{
        return view('admin.panel')->with('courses', $courses);
      }
    }

    public function deleted(){

      $id = Auth::id();
      $user = User::find($id);
      $courses = Course::all()->where('status', false);
      if($user==null){
        return view('index')->with('courses',$courses);
      }
      if($user->email != "okragly.rafal@gmail.com" && $user->email != "kajetan.fadrowski@gmail.com"){
        return view('index')->with('courses',$courses);
      }
      else{
        return view('admin.panel')->with('courses', $courses);
      }
    }

    public function newCourse(){
      return view('admin.newCourse');
    }

    public function contact(){
      return view('contact');
    }

    public function showUser(){
      $id = Auth::id();
      $user = User::find($id);
      $registers = Registers::all()->where('userID', $id);
      return view('user.panel', ['user'=>$user,
                                  'registers'=>$registers
                                ]);
    }

    public function editCourse(Request $request){
        $id = $request->input('id');
        $course =Course::find($id);
        return view('admin.edit')->with('course', $course);
    }

    public function showCourse(Request $request){
        $id = $request->input('id');
        $course = Course::find($id);
        $registers = Registers::all()->where('courseID', $id);
        return view('admin.show', ['course'=> $course,
                                    'registers'=> $registers
                                  ]);
    }

    public function showCart(){
      $userID = Auth::id();
      $user = User::find($userID)->where('status');
      $registers = Registers::all()->where('userID', $userID)->where('status', "w koszyku");
      return view('cart', ['user'=> $user,
                                  'registers'=> $registers
                                ]);
    }

    public function end(){
      return view('end');
    }

    public function about(){
      return view('about');
    }

}
