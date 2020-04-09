@extends('layout.base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>

    <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
<div>
    <a style="margin-left: 25px;" href="{{ url('/contacts/create')}}" class="btn btn-primary"><h3>New contact</h3></a>
    <?php //{{ route('contacts.create')}}  ?>
</div>
  <table class="table table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Job Title</th>
          <th>City</th>
          <th>Country</th>
          <th colspan = 2>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>
                <a href="{{ url('/contacts/'.$contact->id.'/edit')}}" class="btn btn-primary">Edit</a>
                <?php //Define url path ==>  {{ route('contacts.edit',$contact->id)}} ?>
            </td>
            <td>
                <a href="{{ url('/contacts/'.$contact->id)}}" class="btn btn-primary">Show</a>
                <?php //Define url path ==>  {{ route('contacts.edit',$contact->id)}} ?>
            </td>
            <td>
                <form action="{{ url('/contacts/'.$contact->id)}}" method="post">
                <?php //Define url path ==>  {{ route('contacts.destroy', $contact->id)}} ?>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
