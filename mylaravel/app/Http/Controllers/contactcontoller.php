<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class contactcontoller extends Controller
{
    public function index(){

         return view('contact');
    }

    public function store(Request $request){

        //return print_r($request->all());
        //$store = $request->input('name');
        //print_r($store);
        //echo "Hello";
        dd($request->all());

    }
}
