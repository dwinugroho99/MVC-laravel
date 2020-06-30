<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        //dd($request->all());
        $firstName = $request['first_name'];
        $lastName = $request['last_name'];
        return view('welcome',['firstname' => $firstName, 'lastname' => $lastName]);
    }
}
