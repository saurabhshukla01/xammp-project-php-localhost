@extends('layout/master')

@section('body')    //php  call the same @yeild command using in (master.blade.php) file  filed body .

<center><h2>This is All Language in IT software line</h2></center>
<p><?php print_r($subjects); ?></p>
<p><?php print_r($marks); ?></p>

@endsection


