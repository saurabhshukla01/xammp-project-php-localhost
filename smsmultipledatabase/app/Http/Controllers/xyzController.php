<?php

namespace App\Http\Controllers;
use DB;
use smsdb1;
use App\SomeModel;

use Illuminate\Http\Request;

class xyzController extends Controller
{
    public function someMethod()
    {
        $someModel = new SomeModel;
        $someModel->setConnection('mysql2');
        //$someModel= DB::setConnection('mysql2');
        $something = $someModel->find(1);
        //print_r($something);
        return $something;
    }
}

