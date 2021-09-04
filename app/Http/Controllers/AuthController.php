<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('Register');
    }

    public function kirim(Request $request){
        $fname = $request['fname'];
        $lname = $request['lname'];
        $gender = $request['gender'];
        $nationality = $request['nationality'];
        $bahasa = $request['bahasa'];
        $biodata = $request['biodata'];
        return view('welcome', compact('fname', 'lname', 'gender', 'nationality', 'bahasa', 'biodata'));
    }
}
