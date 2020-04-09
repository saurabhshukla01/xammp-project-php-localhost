<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Hellocontroller extends controller{
    public function index($fname){
        //return view('hello');
        echo "Hello Dear $fname";
    }
    public function data(){
        $data ="Hello";
        //$data ="Hi";
        //$data ="Laravel";
        return view('hello')->with('data',$data);

    }
}

?>
