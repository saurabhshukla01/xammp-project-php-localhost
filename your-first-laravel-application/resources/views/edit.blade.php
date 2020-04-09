@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the Task</h1>

<form method="POST" action="{{ url('/task') }}/{{ $task->id }}">
    {{ csrf_field() }}
	<div class="form-group">
		<textarea name="description" class="form-control">{{$task->description }}</textarea>
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>

</form>



</div>

@stop
