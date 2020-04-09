<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    public function insertform()
    {
        return view('index');
    }
    public function insert(Request $request)
    {
            $dlr = $request->input('dlr');
            $dest = $request->input('dest');
            $report = $request->input('report');
            $time = $request->input('time');
            $message_id = $request->input('message_id');
            $mob_no = $request->input('mob_no');
            $prud_message_id = $request->input('prud_message_id');
            $data=array('dlr'=>$dlr,"dest"=>$dest,"report"=>$report,"time"=>$time,"message_id"=>$message_id,
            "mob_no"=>$mob_no,"prud_message_id"=>$prud_message_id);
            DB::table('tasks')->insert($data);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
     }


}
