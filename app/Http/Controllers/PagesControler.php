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
        return view('index');
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
      $courses = Course::all();
      return view('admin.panel')->with('courses', $courses);
    }

    public function addCourse(){
      $courses = Course::all();
      return view('admin.panel')->with('courses',$courses);
    }

    public function newCourse(){
      return view('admin.newCourse');
    }

    public function contact(){
      return view('contact');
    }

    public function showUser(Request $request){
      $id = $request-> input('id');
      $user = User::find($id);
      return view('user.panel')->with('user', $user);
    }

    public function showCart(){
      $userID = Auth::id();
      $user = User::find($userID);
      $registers = Registers::all()->where('userID', $userID);
      return view('cart', ['user'=> $user,
                                  'registers'=> $registers
                                ]);
    }

}
