<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\state;
use App\city;

class RegisterController extends Controller
{
    public function adduser()
    {
               //$country=country::get();

                      return view('register',compact('country','state','city'));
                  }

 public function store(Request $request)
    {
        //dd($req->all());
        register::create([
                    'name'=>request('name'),
                    'country'=>request('country'),
                    'state'=>request('state'),
                    'city'=>request('city'),
                    'hobby'=>request('hobby'),
                ]);

        //return redirect('viewprod');
    }



}
