<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Registers;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function delete(Request $request){
        $id = $request->input('id');
        $registers = Registers::where('userID', $id)->get();
        $howMany = DB::table('registers')->where('userID', $id)->count();
        foreach($registers as $register){
          $register -> status = "usunieto konto";
          $register->save();
        }
        $user = User::find($id);
        $user->delete();
        return view('index');
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
