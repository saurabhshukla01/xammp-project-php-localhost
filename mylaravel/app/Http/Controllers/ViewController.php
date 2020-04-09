<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
   public function index(){
        $subjects = array('php','python','java','Go','Node');
        $marks = [12,13,14,15,16,17];
        //return view('subject')->with(['subjects'=>$subjects,'marks'=>$marks]);
        return view('Testview')->withsubjects($subjects)->withmarks($marks);
   }

   public function data(){
        $data1 = '<script> alert("Hello");</script>';
        $marks = [12,13,14,15,16,17];
        //return view('subject')->with(['subjects'=>$subjects,'marks'=>$marks]);
        return view('Testdata')->with('data1',$data1);
   }
}


?>
