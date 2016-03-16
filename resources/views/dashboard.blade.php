@extends('layout') @section('content')

 @if(Session::has('name'))
    {{ Session::get('name') }}
    @else
         {{ Session::get('name') }}
                @endif


dfg

@endsection
