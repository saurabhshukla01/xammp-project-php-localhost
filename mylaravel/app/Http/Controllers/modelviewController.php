<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teacher;
use Illuminate\routes;     // set the url path

class modelviewController extends Controller
{
    public function index(){
        $student = new teacher(['sname'=>'ram','standerd'=>'6']);
        //$student->sname="vijay";
        //$student->standerd = 10;

        $student->save();
        echo "Data inserted successfully<br>";
        //return view('modelview');

    }
    public function data(Request $request){
        //dd($request->name);       // print one parameter user get it easy
        //dd($request->all());       // print all value user print url after ? symbol so you can used
        // echo $request->get('name');                  // user enter the name of url then pass first parameter
        echo $request->get('name','Name is not entered');        // direct request method printed when user not enter name then call to second parameter
        //dd($request);                // print all method used request commands
    }

}



