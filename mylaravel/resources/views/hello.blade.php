@extends('layout/master')

@section('bodyview')

//<h2>
//{{ $data or 'DATA NOT FOUND'}}
//</h2>
//<p> {{ isset($data)?$data : "Data not found"}}</p>

    <?php $u="Data Not found"; ?>
    @if($data=="Hello")
        {{ $data }}
    @elseif($data=="Hi")
        {{ $data }}
    @else
        {{ $u }}
    @endif

@endsection

