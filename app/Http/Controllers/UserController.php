<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Registers;
use App\Course;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function delete(Request $request){
        $id = Auth::id();
        $registers = Registers::where('userID', $id)->get();
        $howMany = DB::table('registers')->where('userID', $id)->count();
        $user = User::find($id);
        $user->delete();
        $courses = Course::all();
        return view('index')->with('courses', $courses);
      }

    public function getDiscount(Request $request){
      $id = Auth::id();
      $user = User::find($id);
      if($user->points >= $request->input('rPoints')){
        $user ->discount = $user->discount + $request->input('discount');
        $user ->points = $user->points-$request->input('rPoints');
        $user->save();
      }

      return app('App\Http\Controllers\PagesControler')->showUser();
    }
}
