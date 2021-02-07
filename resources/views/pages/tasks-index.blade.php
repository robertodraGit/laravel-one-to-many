@extends('templates/template')

@section('main')
    
    <ul>
        @foreach ($task as $item)
            <li>
                <a href="{{route('tasks-show', $item -> id)}}">{{$item -> title}}</a> 
                <br>
                <span>{{$item -> description}}</span>
            </li>
        @endforeach
    </ul>

@endsection