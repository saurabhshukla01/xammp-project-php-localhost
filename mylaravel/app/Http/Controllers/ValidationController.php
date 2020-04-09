<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
class ValidationController extends Controller {
		public function form() {
			return view('login');
		}
		public function validateform(Request $request) {
			print_r($request->all());
			$this->validate($request,[
				'username'=>'required|max:8',
				'password'=>'required'
			  ]);
		    }
		}

*/


	  class ValidationController extends Controller {
		public function form() {
			return view('login');
		}
		public function validateform(Request $request) {
			print_r($request->all());

			$custom = [
			'username.required'=>'Please fill up the username field',
			'password.required'=>'Please fill up the password field'
			];

			$this->validate($request,[
				'username'=>'required|max:8',
				'password'=>'required'
			  ], $custom);
		    }
		}
