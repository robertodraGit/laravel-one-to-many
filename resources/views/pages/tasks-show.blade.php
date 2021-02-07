@extends('templates/template')

@section('main')
    
    {{$task -> name}} <br>
    {{$task -> lastname}}

    @foreach ($task -> types as $type)
        <li>
            {{$type -> name}} <br>
            {{$type -> description}}
        </li>
    @endforeach 

@endsection