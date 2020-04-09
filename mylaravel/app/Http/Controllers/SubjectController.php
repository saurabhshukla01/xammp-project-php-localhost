<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = array('php','python','java','Go','Node');
        $marks = [12,13,14,15,16,17];
        //return view('subject')->with(['subjects'=>$subjects,'marks'=>$marks]);
        return view('subject')->withsubjects($subjects)->withmarks($marks);
    }
}

?>
