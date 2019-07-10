<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registers;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegistersController extends Controller
{
    public function create(Request $request){
        $register = new Registers();

        $course = Course::find($request->input('CourseID'));
        if($course->registered>= $course->slots){
          return view('index');
        }

        $register->user= $request->input('UserName');
        $register->userID= $request->input('UserID');
        $register->course= $request->input('CourseName');
        $register->courseID= $request->input('CourseID');
        $register->price= $request->input('price');
        $register->status="w koszyku";
        $register->toSend=false;
        $register->save();
        $courses = Course::all();

        $data = \App\Registers::where('courseID', $course->id);
        $course -> registered = $data->count();
        $course ->save();

        return app('App\Http\Controllers\PagesControler')->index();

    }

    public function accept(Request $request){
      $id = $request->input('id');
      $courseID = $request->input('courseID');
      $course = Course::find($courseID);
      $register = Registers::find($id);
      $register -> status = "zatwierdzony";
      $register->save();
      $registers = Registers::all()->where('courseID', $courseID);
      return back();
    }

    public function destroy(Request $request){
      $register = Registers::find($request->input('id'));
      if($register!=null){
        $register -> delete();
      }
      $userID = Auth::id();
      $user = User::find($userID)->where('status');
      $registers = Registers::all()->where('userID', $userID)->where('status', "przyjeto");
      return view('cart', ['user'=> $user,
                                  'registers'=> $registers
                                ]);
    }

    public function transaction(Request $request){
      $total = $request ->input('total');
      $userID = $request->input('userID');
      $registers = Registers::all()->where('userID', $userID)->where('status', "przyjeto");
      $points =0;
      foreach($registers as $register){
        $register -> status = "oczekuje";
        $register -> toSend = true;
        $register->save();
      }
      $user = User::find($userID);
      $user ->discount =0;
      $user->save();
      $registersToSend = Registers::all()->where('userID', $userID)->where('toSend', true);
      app('App\Http\Controllers\EmailController')->transactionUserEmail($registersToSend, $user, $total);

      foreach($registersToSend as $register){
        $register -> toSend = false;
        $register->save();
      }

      return view('end');
    }
}
