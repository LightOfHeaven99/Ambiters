<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    //
    public function contactEmail(Request $request)
    {

      $data = array(
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'message' => $request->input('message')
      );


       $subject = 'Kontakt';
       $file = 'emails.contact';
       $sukces='Pomyślnie wysłano email do zespołu Ambiters';

        Mail::to('kfadrowski@gmail.com')->send(new SendEmail($data, $subject, $file));
        return back()->with('succes', $sukces);

    }

    public function transactionUserEmail($registers, $user, $total )
    {

      $data = array(
        'registers' => $registers,
        'user' => $user,
        'total' => $total);


       $subject = 'Potwierdzenie zamównia';
       $file = 'emails.transaction';

        Mail::to($user->email)->send(new SendEmail($data, $subject, $file));
        return back();
    }
}
