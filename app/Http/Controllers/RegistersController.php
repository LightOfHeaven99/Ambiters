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

        $course = Course::find($request->input('CourseID'));
        if($course->registered>= $course->slots){
          return app('App\Http\Controllers\PagesControler')->index();
        }



        $register = new Registers();
        $register->user= $request->input('UserName');
        $register->userID= $request->input('UserID');
        $register->course= $request->input('CourseName');
        $register->courseID= $request->input('CourseID');
        $register->price= $request->input('price');
        $register->idTransaction= 0   ;
        $register->status="w koszyku";
        $register->toSend=false;
        $register->save();
        $courses = Course::all();

        $data = \App\Registers::where('courseID', $course->id);
        $course -> registered = $data->count();
        $course ->save();

        return app('App\Http\Controllers\PagesControler')->showCart();

    }

    public function update(Request $request){
      $id = $request->input('id');
      $register = Registers::find($id);
      $user = User::find($register->userID);
      $courseID = $register->courseID;
      $course = Course::find($courseID);
      $user -> points = ($user -> points) + ($course ->points);
      $user->save();
      $register -> status = "zatwierdzony";
      $register->save();

      app('App\Http\Controllers\EmailController')->acceptedEmail($register, $user, $course);

      return back();

    }

    public function destroy(Request $request){
      $register = Registers::find($request->input('id'));
      if($register!=null){
        $course = Course::find($register->courseID);
        $data = \App\Registers::where('courseID', $register->courseID);
        $course -> registered = $data->count()-1;
        $course ->save();
        $register -> delete();
      }
      $userID = Auth::id();
      $user = User::find($userID)->where('status');
      $registers = Registers::all()->where('userID', $userID)->where('status', "w koszyku");
      return view('cart', ['user'=> $user,
                                  'registers'=> $registers
                                ]);
    }

    public function destroyAdmin(Request $request){
      $register = Registers::find($request->input('id'));
      if($register!=null){
        $course = Course::find($register->courseID);
        $data = \App\Registers::where('courseID', $register->courseID);
        $course -> registered = $data->count()-1;
        $course ->save();
        $register -> delete();
      }
      $id = $request->input('CourseID');
      $course = Course::find($id);
      $registers = Registers::all()->where('courseID', $id);
      return view('admin.show', ['course'=> $course,
                                  'registers'=> $registers
                                ]);
    }

    public function transaction(Request $request){
      $total = $request ->input('total');
      $userID = $request->input('userID');
      $registers = Registers::all()->where('userID', $userID)->where('status', "w koszyku");
      $idTransaction = 3;
      foreach($registers as $register){
        $idTransaction = $idTransaction + ($register->id);
      }
      $idTransaction = $idTransaction * 6969;
      $points =0;
      foreach($registers as $register){
        $register -> status = "oczekuje";
        $register -> toSend = true;
        $register -> idTransaction = $idTransaction;
        $register->save();
      }
      $user = User::find($userID);
      $user ->discount =0;
      $user->save();
      $registersToSend = Registers::all()->where('userID', $userID)->where('idTransaction', $idTransaction);
      app('App\Http\Controllers\EmailController')->transactionUserEmail($registersToSend, $user, $total, $idTransaction);
      app('App\Http\Controllers\EmailController')->transactionAdminEmail($registersToSend, $user, $total, $idTransaction);

      $data = array(
        'registers' => $registersToSend,
        'user' => $user,
        'total' => $total,
        'idTransaction' => $idTransaction);

      return view('end', ['data'=> $data]);
    }
}
