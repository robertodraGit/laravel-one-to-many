@extends('templates/template')

@section('main')
    
    {{$task -> title}} <br>
    {{$task -> description}}

    @foreach ($task -> types as $type)
        <li>
            {{$type -> name}} <br>
            {{$type -> description}}
        </li>
    @endforeach 

@endsection