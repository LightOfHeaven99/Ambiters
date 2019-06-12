<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Registers;

class UserController extends Controller
{
    public function delete(Request $request){
        $id = $request->input('id');
        $registers = Registers::where('userID', $id)->get();
        $howMany = DB::table('registers')->where('userID', $id)->count();
        foreach($registers as $register){
          $register -> status = "usunieto konto";
        }
        $user = User::find($id);
        $user->delete();
        return view('index');
      }
}
