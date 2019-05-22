<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    public function index(){
        return view('index');
    }

    public function registerNavbar(){
        return view('register');
    }
}
