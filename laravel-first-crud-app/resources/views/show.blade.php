@extends('layout.base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Show  A Contact</h1>
<div>
    Index Page Back Url :
    <a style="margin-left: 25px;" href="{{ url('/contacts')}}" class="btn btn-primary"><h4>Back Index List</h4></a>
    <?php //{{ route('contacts.create')}}  ?>
</div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ url('/contacts/'.$contact->id)}}">
        <?php //{{ route('contacts.update', $contact->id) }}  ?>
            @method('get')
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <b>{{ $contact->first_name }} </b>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <b>{{ $contact->last_name }} </b>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <b> {{ $contact->email }} </b>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <b>{{ $contact->city }} </b>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <b>{{ $contact->country }} </b>
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <b>{{ $contact->job_title }} </b>
            </div>
            </form>
    </div>
</div>
@endsection
