<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('index');
    }
    /*function signUp(Request $request){
        $request->flash();
        echo ('Name: ');
        echo $request->old('firstname');
        echo (' ');
        echo $request->old('surname');
        echo ("<br/>");
        echo ('Phone: ');
        echo $request->old('mobileoremail');
        echo ("<br/>");
        echo ('Date of birth: ');
        echo $request->old('day');
        echo ('/');
        echo $request->old('month');
        echo ('/');
        echo $request->old('year');
        echo ("<br/>");
        echo ('Gender: ');
        echo $request->old('gender');
        //lay gia tri tu form
        $firstname = $request->firstname;
        return view('output',['firstname'=>$firstname]);
    }
    */
}
