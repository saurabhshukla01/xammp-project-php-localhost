
@extends('layout/master')

@section('bodydata')
<center><h2>This is All Language in IT software line</h2></center>
<p><?php echo $data1; ?></p>   <?php // call javascript commannd using php code. ()?>
<p>{{ $data1 }}</p>              <?php // load html data using this one {{ $var }}  (it will not run the scrpit) ?>
<p>{{!! $data1 !!}} </p>          <?php  // load script to use this command syntax . (It will run the script) ?>
<p> ${{$data1}} </p>              <?php // to tell the laravel that this is the not part of larevel part  ?>

@endsection



